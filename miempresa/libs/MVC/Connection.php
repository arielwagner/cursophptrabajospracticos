<?php

class Connection
{
	private $conn;
	
	public function getConnection()
	{
		$this->conn = new PDO(
			'mysql:host='.SERVERNAME.';port='.PORT.
			';dbname='.DATABASENAME.';user='.USERNAME.
			';password='.PASSWORD
		);
		$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try
		{
			return $this->conn;
		}
		catch (Exception $ex)
		{
			return null;
		}
	}
	
	public function setClose()
	{
		if($this->conn != null)
			$this->conn = null;
	}	
}
?>