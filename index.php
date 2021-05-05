<?php

//print_r($_SERVER["DOCUMENT_ROOT"]);

require("config/init.php");

//require_once(DIR_CONTROLLER."UsuarioController.php");

//Quemar los puntos de acceso como valor a las constantes
//$nombreClase = "UsuarioController";
//$nombreMetodo = "listar";

//Ingresar a partir del metodo GET (es decir, por la URL en el navegador) los valores por defecto que quiero asignar a las constantes
$nombreClase = $_GET["controller"];
$nombreMetodo = $_GET["method"];

//concatenar el Controller para la carga del controlador
if($nombreClase){
	if(Session::validar($nombreClase, $nombreMetodo)) {

		$nombreClase .= "Controller";
		//instanciar un objeto de la clase UsuarioController
		$controlador = new $nombreClase();
		//invocar el metodo de dicha clase
		$controlador->$nombreMetodo();
	} else {
		redirect("Login", "ingresar");
	}
}


?>