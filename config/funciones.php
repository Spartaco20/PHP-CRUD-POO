<?php

function getUrlControllerMethod($controller, $method){
	return CONTEXT_ROOT . "/$controller/$method";
}

//redireccionar
function redirect($controller, $method) {
	header("Location: " . getUrlControllerMethod($controller, $method));
}

?>