<?php 
	include_once '../private/app/init.php';
	include VIEWS_DIRECTORY.'/header.php';

	include VIEWS_DIRECTORY."/" . $router[$page][0];

	include VIEWS_DIRECTORY.'/footer.php'
?>