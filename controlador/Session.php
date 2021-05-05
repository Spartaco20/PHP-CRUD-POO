<?php

class Session
{
	
	//a partir de los 2 parametros que se le pasan a la función, toma la decision si es necesario o no validar la sesion
	public static function validar($controlador, $metodo){
		if($controlador != "Login" || $metodo != "ingresar") {
			return isset($_SESSION["user"]) && $_SESSION["user"];
		}
		return true;
	}


	//metodo para recuperar los datos del usuario logeado
	public static function getUser(){
		return unserialize($_SESSION["user"]);
	}
}

?>