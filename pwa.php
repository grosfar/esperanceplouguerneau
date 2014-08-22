<?php

function searchPicasaImages() {
	// Connexion à la base
	$db = JFactory::getDbo();
	
	$query = $db->getQuery(true);
	$query->select('url,ts');
	$query->from('test.picasa_images');
	$db->setQuery($query);
	$result = $db->loadObjectList();
	$listeUrlPicasa = array();
	foreach ($result as $line) {
		array_push($listeUrlPicasa, $line->url);
	}		
	
	return $listeUrlPicasa;
}

?>
