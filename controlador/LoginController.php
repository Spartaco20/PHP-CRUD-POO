<?php


class LoginController
{
	
	private static $usuarioServicio;
	private static $template;

	public function __construct(){
		self::$usuarioServicio = new UsuarioService();
		self::$template = new TemplateLogin();
	}

	public function ingresar(){
		
		//recibir los datos y almacenarlos
		$nombreUsuario = filter_input(INPUT_POST,"nombreUsuario");
		$clave = filter_input(INPUT_POST,"clave");

		//Ejecuta el metodo de la clase 
		//$usuarios = self::$usuarioServicio -> consultarTodos();

		$mensaje = null;

		//validacion
		if($nombreUsuario && $clave){
			$usuario = self::$usuarioServicio -> consultarLogin($nombreUsuario, $clave);
			if($usuario) {
				$_SESSION["user"] = serialize($usuario);
				redirect("Usuario","listar");
				return;
				//echo($usuario->getNombres() . " - " . $usuario->getApellidos());
			} else{
				$mensaje = "Valide sus credenciales";
			}
			
		}

		//Conexion a la vista 
		self::$template->render(
			["titulo"=>"Login", "mensaje" => $mensaje]
		);
	}



	public function salir(){
		session_destroy();
		redirect("Login","ingresar");
	}
}

?>