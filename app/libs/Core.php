<?php

/* Mapear la url ingresada en el navegador
1. Controlador
2. Metodo - funcion
3. Parametros */

class Core
{
	protected $controladorActual = "paginas";
	protected $metodoActual = "index";
	protected $parametros = [];

	// Constructor
	public function __construct(){
		$url = $this->getUrl();

		// Cargar las Clases o Contoladores
		if (isset($url[0])) {
			// Buscar en la carpeta de controladores si el controlador existe
			if (file_exists('../app/controllers/' . ucfirst($url[0]) . '.php')) {
				$this->controladorActual = ucfirst($url[0]);
				unset($url[0]);
			}
			//requerir el controlador nuevo
			require_once '../app/controllers/' . $this->controladorActual . '.php';
			// se instancia el controlador actual
			$this->controladorActual = new $this->controladorActual;
		} else {
			require_once '../app/controllers/Paginas.php';
			// se instancia el controlador actual
			$this->controladorActual = new Paginas;
		}

		// Cargar los Metodos de las Clases
		if (isset($url[1])) {
			if (method_exists($this->controladorActual, $url[1])) {
				$this->metodoActual = $url[1];
				unset($url[1]);
			}
		}

		// Obtener los parametros que vienen por la url
		$this->parametros = $url ? array_values($url) : [];

		// LLamar a los parametros y listarlos en un array
		call_user_func_array([$this->controladorActual,$this->metodoActual],$this->parametros);

	}

	public function getUrl(){
		//echo $_GET['url'];
		if (isset($_GET['url'])) {
			$url = rtrim($_GET['url'], '/');
			$url = filter_var($url, FILTER_SANITIZE_URL);
			$url = explode('/', $url);
			return $url;
		}
	}
}
