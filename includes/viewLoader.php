<?php  

	require_once "resources/controllers/Investigacion.php";

	$url = $_SERVER["REQUEST_URI"];
	$vista = explode('/', $url)[2];

	$response = Investigacion::View($vista);

	$nav  = $response->nav;
	$view = $response->view;


?>