<?php

/**
 * @author  Wagner, Ariel Alejandro
 * @copyright Job Systems Solutions
 * MODEL - Modelo para el negocio con la base de datos.
 * 
 */
class Models {

	private $db;
	private $serverName;
	private $dataBaseName;
	private $userName;
	private $password;
	private $port;
	private $results;
	var $arrayRes = array();

	function __construct() {
		$this->serverName='localhost';
		$this->dataBaseName='libreria';
		$this->userName='root';
		$this->password='admin';
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
	public function getListado($setField, $setValue) {
		try {
			$this->db->select_db($this->dataBaseName);
			if(!$this->db) {
				throw new Exception('Error : '.mysqli_error($this->db));
			}
			$querys="SELECT * FROM Libros WHERE Libros.".$setField
			." LIKE '".$setValue."%'";
			$this->results = $this->db->query($querys);
			if(!$this->results) {
				throw new Exception('Error : '.mysqli_error($this->db));
			}
			if($this->countRows() > 0) {
				for($r=0; $r < $this->countRows(); $r++) {
					$row=$this->getRow();
					$this->arrayRes[1][$r] = stripslashes($row[1]); // Campo Title
					$this->arrayRes[2][$r] = stripslashes($row[2]); // Campo Published
					$this->arrayRes[0][$r] = stripslashes($row[0]); // Campo ISBN
					$this->arrayRes[3][$r] = '$ '.number_format(stripslashes($row[3]), 2, ','); // Campo Price
					$this->arrayRes[4][$r] = $this->countRows();
				}
			} else {
				$this->arrayRes=null;
			}	
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