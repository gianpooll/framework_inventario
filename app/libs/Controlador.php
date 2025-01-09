<?php

/* Clase de controlador principal
   Se encarga de cargar los modelos y las vistas	*/
class Controlador {
	// Cargar Modelo
	public function modelo($modelo){
		require_once "../app/models/" . $modelo . '.php';
		return new $modelo();
	}

	// Cargar Vista
	public function vista($vista, $datos = []){
		if (file_exists('../app/views/' . $vista . '.php')){
			require_once "../app/views/" . $vista . '.php';
		}else{
			require_once "../app/views/pages/404.php";
		}
		
	}

	public function limpiarCadena($cadena){
		$busqueda = array(
			'@<script[^>]*?>.*?</script>@si',   // Elimina javascript
			'@<[\/\!]*?[^<>]*?>@si',            // Elimina las etiquetas HTML
			'@<style[^>]*?>.*?</style>@siU',    // Elimina las etiquetas de estilo
			'@<![\s\S]*?--[ \t\n\r]*>@'         // Elimina los comentarios multi-línea
		);
	 
			$salida = preg_replace($busqueda, '', $cadena);
			return $salida;
	}
	
	public function encritarPass($pass){
		$hash = password_hash($pass, PASSWORD_BCRYPT);
		return $hash;
	}

	public function desencriptarPass($pass/*viene usuario*/, $hash/*base de datos*/){
		if(password_verify($pass, $hash)){
			return 'Ok';
		}else{
			return 'Error';
		}
	}

}