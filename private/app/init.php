<?php 
	include_once '../private/app/config.php';
	include_once '../private/app/routes.php';

	session_start();
	$_SESSION["test"] = "Azerty";
	var_dump($_SESSION);

	try
	{
		$pdo = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $user, $pass);
		if(MODE === "dev")
		{
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
	}
	catch(Exception $e)
	{
		die("Erreur : " . $e->getMessage());
	}

	$default_page = "home";

	if (isset($_GET['page'])) 
	{
    	$page = $_GET['page'];
	}
	else 
	{
    	$page = $default_page;
	}

	if(!array_key_exists($page, $router))
	{
		$page = "404";
	}

	if ((isset($router[$page][1]) && $router[$page][1] === true) &&
	    !(isset($_SESSION['user']['id']) && !empty($_SESSION['user']['id']) && is_numeric($_SESSION['user']['id']))) 
	{
	    setFlashbag("warning","Vous n'êtes pas autorisé à afficher la page ".$page);
	    header("location: index.php?page=login");
	    exit;
	}


?>