<?php

function searchPicasaImages() {
	// Connexion et sélection de la base
	$mysqli = new mysqli("localhost", "root", "mysql", "test");
	if ($mysqli->connect_errno) {
	    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	
	// Exécution des requêtes SQL
	$query = 'SELECT url,ts FROM picasa_images';
	$result = $mysqli->query($query);
	if ($result->num_rows == 0) {
		$listeUrlPicasa = searchPicasaImagesAndInsertDao($mysqli);
	} else {
		$listeUrlPicasa = array();
		$dateJour = new DateTime();
		while ($line = $result->fetch_assoc()) {
			$dateUrl = new DateTime($line["ts"]);
			$interval = $dateUrl->diff($dateJour);
			$diffJour = $interval->format('%a');
			// Si les images en base MySQL ont 1 jour ou plus, on fait une nouvelle recherche dans l'API Picasa
			if ($diffJour>0) {
				mysqli_autocommit($mysqli,"FALSE");
				$query = 'DELETE FROM picasa_images WHERE idpicasa_images>0';
				$result = $mysqli->query($query);
				$listeUrlPicasa = searchPicasaImagesAndInsertDao($mysqli);
				mysqli_commit($mysqli);
				mysqli_autocommit($mysqli,"TRUE");
				break;
			}
			array_push($listeUrlPicasa, $line["url"]);
		}		
	}
	
	return $listeUrlPicasa;
}

function searchPicasaImagesAndInsertDao($mysqli) {
	$listeUrlPicasa=searchPicasaImagesDao();
	foreach ($listeUrlPicasa as $entry) {
		$query = "INSERT INTO picasa_images (url) VALUES('" . $entry . "')";
		$result = $mysqli->query($query);
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
	//$plainListAlbum = file_get_contents('/home/famille/work/bootstrap/listalbum.xml');
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
			//$plainListPhoto = file_get_contents('/home/famille/work/bootstrap/listphoto.xml');
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
