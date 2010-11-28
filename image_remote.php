<?php
	$url = $_REQUEST["url"];
	header("Content-type: " . image_type_to_mime_type(exif_imagetype($url)));
	echo file_get_contents($url);
?>