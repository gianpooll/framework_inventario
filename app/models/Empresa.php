<?php

class Empresa extends DataBase {

	private $db;
	private $fecha;
	
	public function __construct(){
		$this->db = $this->conectar();
		$this->fecha = date('Y-m-d H:i:s');
	}

	public function listar_empresas(){
		$sql = "SELECT *, ROW_NUMBER() OVER() AS num FROM `empresas`";
		$consulta = $this->db->prepare($sql);
		$consulta->execute();
		return $consulta->fetchAll(PDO::FETCH_OBJ);
	}

	public function guardar_empresa($datos){
		$nom = $datos['nom'];
		$sql = "INSERT INTO empresas (nombre_empresa) VALUES (:nom)";
		$consulta = $this->db->prepare($sql);
		$consulta->bindParam(':nom', $nom);
		$resultado = $consulta->execute();
		if ($resultado) {
			return 'Exito';
		}else{
			return 'Error';
		}
	}

}