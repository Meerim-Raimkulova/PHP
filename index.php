<?php
	require_once("Controller.php");
	require_once("View.php");
	require_once("Model.php");
	require_once("Conf.php");
	//require_once("home.php");
	//require_once("first.php");
	//require_once("second.php");
	//require_once("third.php");
	
	$controller = new Controller($serverName,$userName,$password,$dbName);
	//$view = $controller->getView();
	//$controller->setView($view);
	
	if(isset($_GET["achkych"])){
		$controller->set($_GET["achkych"]);
	}
	
	$controller->Marshrut();
?>

