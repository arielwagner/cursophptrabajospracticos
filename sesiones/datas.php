<?php

/**
* Clase de manejo para base de datos y tabla.
*/
class Datas {
	
	private $db;
	private $serverName;
	private $dataBaseName;
	private $userName;
	private $password;
	private $port;
	private $results;
	
	function __construct() {
		$this->serverName='localhost';
		$this->dataBaseName='members';
		$this->userName='root';
		$this->password='';
		$this->port=(int) 3306;
		$this->db=new mysqli($this->serverName, 
				             $this->userName, 
				             $this->password, '', 
				             $this->port, '');
	}

	// Determina si está conectado.
	public function isConnected() {
		return ((bool) ($this->db instanceof mysqli));
	}
	
	// Cerrar la conexión hacia la base de datos.
	public function setClose() {
		if ($this->isConnected()) {
			$this->db->close();
		}
		$this->db = null;
	}
	
	// Obtiene el listado de la Tabla
	public function getListado($setUserName, $setPassword) {
		try {
				$this->db->select_db($this->dataBaseName);
				if(!$this->db) {
					throw new Exception('Error : '.mysqli_error($this->db));
				}
				// Atención: No usar puntos para unir la Consulta.
				$querys="SELECT * FROM Usuarios
				WHERE usuario = '$setUserName'
				AND clave = '$setPassword'";
				$this->results = $this->db->query($querys);
				if(!$this->results) {
						throw new Exception('Error : '.mysqli_error($this->db));
				}
				return $this->results;
			} catch (Exception $ex) {
				die($ex->getMessage());
		}
	}
	
	// Devuelve la cantidad de registros.
	public function countRows() {
		return mysqli_num_rows($this->results);
	}
	
	// Devuelve la estructura de la Fila.
	public function getRow() {
		return mysqli_fetch_array($this->results);
	}
}
?>