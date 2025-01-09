<?php

class Usuarios extends Controlador{

	public function index(){		
		$usuarios = $this->modelo('Usuario')->listarUsuarios();
		$this->vista('Pages/usuarios/vistaUsuarios', $usuarios);
	}

	public function nuevo_usuario(){
		$this->vista('Pages/usuarios/agregar_usuario');
	}

	public function agregarUsuario(){
		if ($_POST['nombre'] == '' || $_POST['documento'] == '' || $_POST['usuario'] == '' || $_POST['pass'] == '' || $_POST['tipo'] == 'Escoja una opcion') {
			$error = ['error' => 'Debes rellenar todos los campos del formulario'];
			$this->vista('Pages/usuarios/agregar_usuario', $error);
		}else{
			$nombre = strtoupper($this->limpiarCadena($_POST['nombre']));
			$documento = $this->limpiarCadena($_POST['documento']);
			$usuario = $this->limpiarCadena($_POST['usuario']);
			$pass = $this->encritarPass($this->limpiarCadena($_POST['pass']));
			$tipo = $this->limpiarCadena($_POST['tipo']);
			$datos = ['nombre' => $nombre, 'documento' => $documento, 'usuario' => $usuario, 'pass' => $pass, 'tipo' => $tipo];
			$respuesta = $this->modelo('Usuario')->guardarUsuario($datos);
			if ($respuesta == 'Exito') {
				$usuarios = $this->modelo('Usuario')->listarUsuarios();
				$this->vista('Pages/usuarios/vistaUsuarios', $usuarios);
			}else {
				$error = ['error' => 'Error al guardar datos en la base de datos'];
				$this->vista('Pages/usuarios/agregar_usuario', $error);
			}
		}
	}

	public function editarUsuario($id){
		$usuario = $this->modelo('Usuario')->buscarUsuario($id);
		$this->vista('Pages/usuarios/vistaEditarUsuario', $usuario);
	}

	public function editUsuario(){
		$id = $this->limpiarCadena($_POST['id']);
		$nombre = strtoupper($this->limpiarCadena($_POST['nombre']));
		$documento = $this->limpiarCadena($_POST['documento']);
		$usuario = $this->limpiarCadena($_POST['usuario']);
		$tipo = $this->limpiarCadena($_POST['tipo']);
		$estado = $this->limpiarCadena($_POST['estado']);
		$datos = ['id' => $id, 'nombre' => $nombre, 'documento' => $documento, 'usuario' => $usuario, 'estado' => $estado, 'tipo' => $tipo];
		$respuesta = $this->modelo('Usuario')->editarUsuario($datos);
		if ($respuesta == 'Exito') {
			$usuarios = $this->modelo('Usuario')->listarUsuarios();
			$this->vista('Pages/usuarios/vistaUsuarios', $usuarios);
		}else {
			$error = ['error' => 'Error al guardar datos en la base de datos'];
			$this->vista('Pages/usuarios/agregar_usuario', $error);
		}
	}

	public function eliminarUsuario($id){
		$respuesta = $this->modelo('Usuario')->eliminarUsuario($id);
		if ($respuesta == 'Exito') {
			$usuarios = $this->modelo('Usuario')->listarUsuarios();
			$this->vista('Pages/usuarios/vistaUsuarios', $usuarios);
		}else {
			echo 'Error al guardar datos en la base de datos';
			
		}
	}

}