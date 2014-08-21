<?php

function searchPicasaImages() {
	// Connexion à la base
	$db = JFactory::getDbo();
	
	$query = $db->getQuery(true);
	$query->select('url,ts');
	$query->from('test.picasa_images');
	$db->setQuery($query);
	$result = $db->loadObjectList();
	if (count($result) == 0) {
		$listeUrlPicasa = searchPicasaImagesAndInsertDao($mysqli);
	} else {
		$listeUrlPicasa = array();
		$dateJour = new DateTime();
		foreach ($result as $line) {
			$dateUrl = new DateTime($line->ts);
			$interval = $dateUrl->diff($dateJour);
			$diffJour = $interval->format('%a');
			// Si les images en base MySQL ont 1 jour ou plus, on fait une nouvelle recherche dans l'API Picasa
			if ($diffJour>0) {
				$query = $db->getQuery(true);
				$query->delete('test.picasa_images');
				$query->where('idpicasa_images>0');
				$db->setQuery($query);
				$db->execute();
				$listeUrlPicasa = searchPicasaImagesAndInsertDao();
				break;
			}
			array_push($listeUrlPicasa, $line->url);
		}		
	}
	
	return $listeUrlPicasa;
}

function searchPicasaImagesAndInsertDao($mysqli) {
	$listeUrlPicasa=searchPicasaImagesDao();
	// Connexion à la base
	$db = JFactory::getDbo();

	foreach ($listeUrlPicasa as $entry) {
		$query = $db->getQuery(true);
		$query->insert('test.picasa_images');
		$query->columns('url');
		$query->values("'".$entry."'");
		$db->setQuery($query);
		$db->execute();
	}
	return $listeUrlPicasa;
}

function searchPicasaImagesDao() {
	// Liste des albums : https://picasaweb.google.com/data/feed/api/user/esperance.plouguerneau
	// Liste des photos d'un album : https://picasaweb.google.com/data/feed/api/user/esperance.plouguerneau/albumid/5931170016001240529
	
	$listeUrl = array();
	
	// Get cURL resource
	$curl = curl_init();
	// Set some options - we are passing in a useragent too here
	curl_setopt_array($curl, array(
	    CURLOPT_RETURNTRANSFER => 1,
	    CURLOPT_URL => 'https://picasaweb.google.com/data/feed/api/user/esperance.plouguerneau',
	    CURLOPT_USERAGENT => 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1)'
	));
	// Send the request & save response to $resp
	$plainListAlbum = curl_exec($curl);
	$listAlbum = new SimpleXMLElement($plainListAlbum);
	
	$dateJour = new DateTime();
	foreach ($listAlbum->entry as $entry) {
		// Date au format RFC 3339
		$datePublicationAlbum = date_create($entry->published);
		$interval = $datePublicationAlbum->diff($dateJour);
		$diffJour = $interval->format('%a');
		// On ne cherche des photos que dans les albums qui ont ete publies il y a moins de 350 jours
		if ($diffJour < 350) {
			$namespaces = $entry->getNamespaces(true);
			$gphotoid = $entry->children($namespaces['gphoto'])->id;
			$albumChoisi = "https://picasaweb.google.com/data/feed/api/user/esperance.plouguerneau/albumid/" . $gphotoid;
	
			// Set some options - we are passing in a useragent too here
			curl_setopt_array($curl, array(
			    CURLOPT_RETURNTRANSFER => 1,
			    CURLOPT_URL => $albumChoisi,
			    CURLOPT_USERAGENT => 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1)'
			));
			// Send the request & save response to $resp
			$plainListPhoto = curl_exec($curl);
			$listPhoto = new SimpleXMLElement($plainListPhoto);
			
			foreach ($listPhoto->entry as $entry) {
				array_push($listeUrl, $entry->content->attributes()->src);
			}	
		}
	}
	
	$listeCle = array_rand($listeUrl, 3);
	$listeUrlPicasa = array();
	foreach ($listeCle as $entry) {
		array_push($listeUrlPicasa,$listeUrl[$entry]);
	}
	
	// Close request to clear up some resources
	curl_close($curl);
	
	return $listeUrlPicasa;
}

?>
