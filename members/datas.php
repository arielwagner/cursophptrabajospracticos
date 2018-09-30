<?php

class Datas {
	
	private $serverName;
	private $dataBaseName;
	private $userName;
	private $password;
	private $port;
	private $results;
	
	function __construct() {
		$this->serverName='localhost';
		$this->dataBaseName='members';
		$this->userName='root'; // colocar usuario
		$this->password=''; // colocar contrasena
		$this->port=(int) 3306;
	}
	
	// Verifica y establece conexion de datos
	private function setConection() {
		try {
			@ $db = mysqli_connect($this->serverName.':'.$this->port, $this->userName, $this->password);
			if(!$db) {
				return null;
				throw new Exception();
			} else {
				return $db;
			}
		} catch(Exception $ex) {
			return null;
		}
	}
	
	// Obtiene el listado de la Tabla
	public function getListado() {
		$conn = $this->setConection(); // En este caso no se pasa como parametro
		try {
			$tb = mysqli_select_db($conn, $this->dataBaseName);
			if(!$tb) {
				throw new Exception('Error de Base de Datos: '.mysqli_error());
			}
			$query = "SELECT * FROM Usuarios ORDER BY id Asc";
			$this->results = mysqli_query($conn, $query);
			if(!$this->results) {
				throw new Exception('Error de Tabla: '.mysqli_error());
			} 
			$arr = array();
			while($row = mysqli_fetch_row($this->results)) {
				$add=array($row[0], $row[1], $row[2]);
				array_push($arr, $add); 
			}
			mysqli_close($conn);
			return $arr;  // pasar el array a la vista.
		} catch (Exception $ex) {
			die($ex->getMessage());
		}
	}
	
	// Devuelve la cantidad de registros.
	public function countRows() {
		return mysqli_num_rows($this->results);
	}
	
	// Agrega un nuevo Usuario.
	public function addNewUser($userName, $password) {
		$conn = $this->setConection();
		try {
			$tb = mysqli_select_db($conn, $this->dataBaseName);
			if(!$tb) {
				throw new Exception('Error de Base de Datos: '.mysqli_error());
			}
			$query = "INSERT INTO Usuarios (usuario, clave) VALUES ('".$userName."', '".$password."')";
			$this->results = mysqli_query($conn, $query);
			if(!$this->results) {
				throw new Exception('Error de Tabla: '.mysqli_error());
			}
			mysqli_close($conn);
			return $this->results;
		} catch (Exception $ex) {
			die($ex->getMessage());
		}
	}
	
	// Elimina a un usuario...
	public function eraseUser($id) {
		$conn = $this->setConection();
		try {
			$tb = mysqli_select_db($conn, $this->dataBaseName);
			if(!$tb) {
				throw new Exception('Error de Base de Datos: '.mysqli_error());
			}
			$query = "DELETE FROM Usuarios WHERE id = ".$id;
			$this->results = mysqli_query($conn, $query);
			if(!$this->results) {
				throw new Exception('Error de Tabla: '.mysqli_error());
			}
			mysqli_close($conn);
			return $this->results;
		} catch (Exception $ex) {
			die($ex->getMessage());
		}
	}
	
	// Actualiza un Usuario existente en la base de datos.
	public function updateUser($id, $userName, $password) {
		$conn = $this->setConection();
		try {
			$tb = mysqli_select_db($conn, $this->dataBaseName);
			if(!$tb) {
				throw new Exception('Error de Base de Datos: '.mysqli_error());
			}
			$query = "UPDATE Usuarios SET usuario = '".$userName."', 
			        clave='".$password."' WHERE id = '".$id."'";
			$this->results = mysqli_query($conn, $query);
			if(!$this->results) {
				throw new Exception('Error de Tabla: '.mysqli_error());
			}
			mysqli_close($conn);
			return $this->results;
		} catch (Exception $ex) {
			die($ex->getMessage());
		}
	}
}
?>