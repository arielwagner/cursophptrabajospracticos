<?php

/**
* Clase de manejo para base de datos y tabla.
*/
class Datas {
	
	private $db;
	private $results;
	
	function __construct() {
		$this->db=new mysqli(SERVERNAME, 
				             USERNAME, 
				             PASSWORD, '', 
				             PORT, '');
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
			$this->db->select_db(DATABASENAME);
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
	
	// Obtiene al usuario por su nombre.
	public function getUser($setUserName) {
		try {
			$this->db->select_db(DATABASENAME);
			if(!$this->db) {
				throw new Exception('Error : '.mysqli_error($this->db));
			}
			// Atención: No usar puntos para unir la Consulta.
			$querys="SELECT * FROM Usuarios
			WHERE usuario = '$setUserName';";
			$this->results = $this->db->query($querys);
			if(!$this->results) {
				throw new Exception('Error : '.mysqli_error($this->db));
			}
			return $this->results;
		} catch (Exception $ex) {
			die($ex->getMessage());
		}		
	}
	
	// Agregar un usuario a la base de datos.
	public function addRegisterUser($userName, $password) {
		try {
			$this->db->select_db(DATABASENAME);
			if(!$this->db) {
				throw new Exception('Error de Base de Datos: '.mysqli_error($this->db));
			}
			$querys="INSERT INTO Usuarios (usuario, clave) 
			VALUES ('".$userName."', '".$password."')";
			$this->results = $this->db->query($querys); // mysql_query($query);
			if(!$this->results) {
				throw new Exception('Error de Tabla: '.mysqli_error($this->db));
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