<?php

//inicio de sesiones para el login
session_start();


define("CONTEXT_ROOT","/cursoPHP/ejemplo-poo-mvc");

define("APP_ROOT",$_SERVER["DOCUMENT_ROOT"].CONTEXT_ROOT);

//Creacion de constantes para el facil acceso a las clases
define("DIR_CONTROLLER", APP_ROOT."/controlador/");

define("DIR_MODEL", APP_ROOT."/modelo/");

define("DIR_VIEW", APP_ROOT."/vista/");

define("DIR_SERVICE", APP_ROOT."/servicio/");

include("autoload.php");

include("funciones.php");

?>