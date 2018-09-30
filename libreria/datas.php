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
		$this->dataBaseName='libreria';
		$this->userName='root'; // Aqui va el usuario
		$this->password=''; // Aqui la contrasena
		$this->port=(int) 3306;
	}
	
	public function setConection() {
		@ $db = mysql_connect($this->serverName.':'.$this->port, $this->userName, $this->password);
		return $db;
	}
	
	public function getListQuery() {
		mysql_select_db($this->dataBaseName, $this->setConection());
		// se muestran los primeros 20 registros de la lista.
		$query="SELECT * FROM Libros ORDER BY isbn ASC LIMIT 0, 20;";
		$rlts = mysql_query($query, $this->setConection());
		$arr=array();
		while($row = mysql_fetch_row($rlts)) {
			$add=array($row[0], $row[1], $row[2], $row[3]);
			array_push($arr, $add); 
		}
		return $arr;
	}
}
?>