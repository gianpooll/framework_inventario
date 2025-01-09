<?php

class Empresas extends Controlador {

	public function index(){
		$empresas = $this->modelo('Empresa')->listar_empresas();
		$this->vista('pages/empresas/vistaEmpresas', $empresas);
	}

	public function nuevaEmpresa(){
		$this->vista('pages/empresas/vistaAgregarEmpresa');
	}

	public function guardarEmpresa(){
		if ($_POST['nombre'] != '') {
			$nom = strtoupper($this->limpiarCadena($_POST['nombre']));
			$datos = ['nom'=>$nom];
			$resultado = $this->modelo('Empresa')->guardar_empresa($datos);
			if ($resultado == 'Exito') {
				$empresas = $this->modelo('Empresa')->listar_empresas();
				$this->vista('pages/empresas/vistaEmpresas', $empresas);
			}else {
				$error = ['error' => 'Error al guardar datos en la base de datos'];
				$this->vista('Pages/usuarios/agregar_usuario', $error);
			}
		} else {
			$error = ['error' => 'Debes completar todos los campos del formulario'];
			$this->vista('Pages/empresas/vistaAgregarEmpresa', $error);
		}
		
	}

}