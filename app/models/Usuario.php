<?php

class Usuario extends DataBase {
	
	private $db;
	private $fecha;
	
	public function __construct(){
		$this->db = $this->conectar();
		$this->fecha = date('Y-m-d H:i:s');
	}

	public function listarUsuarios(){
		$sql = "SELECT *, ROW_NUMBER() OVER() AS num FROM `usuarios`";
		$consulta = $this->db->prepare($sql);
		$consulta->execute();
		return $consulta->fetchAll(PDO::FETCH_OBJ);
	}

	public function guardarUsuario($usuario){
		$nom = $usuario['nombre'];
		$doc = $usuario['documento'];
		$usu = $usuario['usuario'];
		$pas = $usuario['pass'];
		$tip = $usuario['tipo'];
		$sql = "INSERT INTO usuarios (nombre, documento, usuario, pass, tipo) VALUES (:nom, :doc, :usu, :pas, :tip)";
		$consulta = $this->db->prepare($sql);
		$consulta->bindParam(':nom', $nom);
		$consulta->bindParam(':doc', $doc);
		$consulta->bindParam(':usu', $usu);
		$consulta->bindParam(':pas', $pas);
		$consulta->bindParam(':tip', $tip);
		$resultado = $consulta->execute();
		if ($resultado) {
			return 'Exito';
		}else{
			return 'Error';
		}
	}

	public function buscarUsuario($id){
		$sql = "SELECT * FROM usuarios WHERE usuario_id LIKE :id";
		$consulta = $this->db->prepare($sql);
		$consulta->bindParam(':id', $id);
		$consulta->execute();
		return $consulta->fetch(PDO::FETCH_ASSOC);
	}

	public function editarUsuario($datos){
		$id = $datos['id'];
		$nom = $datos['nombre'];
		$doc = $datos['documento'];
		$usu = $datos['usuario'];
		$est = $datos['estado'];
		$tip = $datos['tipo'];
		$fec = $this->fecha;
		$sql = "UPDATE usuarios SET nombre = :nom, documento = :doc, usuario = :usu, estado = :est, tipo = :tip, modificado = :fec WHERE usuario_id = :id";
		$consulta = $this->db->prepare($sql);
		$consulta->bindParam(':nom', $nom);
		$consulta->bindParam(':doc', $doc);
		$consulta->bindParam(':usu', $usu);
		$consulta->bindParam(':est', $est);
		$consulta->bindParam(':tip', $tip);
		$consulta->bindParam(':fec', $fec);
		$consulta->bindParam(':id', $id);
		$resultado = $consulta->execute();
		if ($resultado) {
			return 'Exito';
		}else{
			return 'Error';
		}
	}

	public function eliminarUsuario($id){
		$sql = "DELETE FROM usuarios WHERE usuario_id = :id";
		$consulta = $this->db->prepare($sql);
		$consulta->bindParam(':id', $id);
		$resultado = $consulta->execute();
		if ($resultado) {
			return 'Exito';
		}else{
			return 'Error';
		}
	}
	
}