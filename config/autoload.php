<?php

//recibe como parametro el nombre de la clase
function autoloadControlador($nombreControlador){
	$urlArchivo = DIR_CONTROLLER . $nombreControlador . ".php";

	//echo ("Intentando cargar la clase $nombreControlador en el directorio: " . DIR_CONTROLLER ."<br/>");

	if(file_exists($urlArchivo)){
		require_once($urlArchivo);
	} 
	//else {
	//	die("El controlador solicitado no existe...");
	//}
}

function autoloadModelo($nombreModelo){
	$urlArchivo = DIR_MODEL . $nombreModelo . ".php";

	//echo ("Intentando cargar la clase $nombreModelo en el directorio: " . DIR_MODEL ."<br/>");

	if(file_exists($urlArchivo)){
		require_once($urlArchivo);
	} 
	//else {
	//	die("El clase solicitada no existe...");
	//}
}

function autoloadVista($nombreVista){
	$urlArchivo = DIR_VIEW . $nombreVista . ".php";

	//echo ("Intentando cargar la clase $nombreVista en el directorio: " . DIR_VIEW ."<br/>");

	if(file_exists($urlArchivo)){
		require_once($urlArchivo);
	} 
	//else {
	//	die("El clase solicitada no existe...");
	//}
}

function autoloadServicio($nombreServicio){
	$urlArchivo = DIR_SERVICE . $nombreServicio . ".php";

	//echo ("Intentando cargar la clase $nombreServicio en el directorio: " . DIR_SERVICE ."<br/>");

	if(file_exists($urlArchivo)){
		require_once($urlArchivo);
	} else {
		die("La clase solicitada no existe...");
	}
}

spl_autoload_register("autoloadControlador");
spl_autoload_register("autoloadModelo");
spl_autoload_register("autoloadVista");
spl_autoload_register("autoloadServicio");

?>