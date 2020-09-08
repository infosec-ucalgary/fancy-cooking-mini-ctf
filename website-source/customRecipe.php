<?php

//Allow entities in XML files
libxml_disable_entity_loader(FALSE);

//Receive XML data as string from user
$data = file_get_contents('php://input');

//Parse string into XML file, allowing replacement of external entities
$xml = simplexml_load_string($data, 'SimpleXMLElement', LIBXML_NOENT);

//Fetch recipe with newline characters
$recipe = nl2br(file_get_contents('./recipe.txt'));

//Send name node to user
echo "<p><b>", $xml, "'s  Xtra Xceptional Enchiladas:</b><p>", $recipe;

?>