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
		$this->userName='root';
		$this->password='admin';
		$this->port=(int) 3306;
	}
	
	public function setConection() {
		@ $db = mysql_connect($this->serverName.':'.$this->port, $this->userName, $this->password);
		return $db;
	}
	
	public function getQuery($setField, $setValue) {
		mysql_select_db($this->dataBaseName);
		$query="SELECT * FROM Libros WHERE ".$setField." LIKE '%".$setValue."%' ";
		$this->results = mysql_query($query);
		return $this->results;
	}
	
	public function countRows() {
		return mysql_num_rows($this->results);
	}
	
	public function getRow() {
		return mysql_fetch_array($this->results);
	}
}
?>