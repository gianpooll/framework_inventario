<?php

class DataBase {
	private $host = DB_HOST;
	private $user = DB_USER;
	private $pass = DB_PASS;
	private $name_db = DB_NAME;

	private $conexion;
	private $consulta;
	private $error;

	public function conectar(){
		// Configuracion a Conexion
		$dsn = "mysql:host=" . $this->host . ";dbname=" . $this->name_db;
		$opciones = array(
			PDO::ATTR_PERSISTENT => true,
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		);

		try {
			$this->conexion = new PDO($dsn, $this->user, $this->pass, $opciones);
			$this->conexion->exec("set names utf8");
			return $this->conexion;
		} catch (PDOException $th) {
			$this->error = $th->getMessage();
			echo $this->error;
		}
	}

}