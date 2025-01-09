<?php

class Paginas extends Controlador{

	public function index(){
		// Cargando la pagina de la vista
		$this->vista('Pages/inicio');
	}
	
}