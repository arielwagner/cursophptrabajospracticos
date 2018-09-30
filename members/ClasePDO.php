<?php

class ClasePDO
{
	private $pdo;
	
	public function getConnection()
	{
		$this->pdo = new PDO(
			'mysql:host=localhost;dbname=basedatos;port=3306;dbname=empresa', 
			'usuario','clave'
		);
		if ($this->pdo!=null) 
		{
			return $this->pdo;
		} else
		{
			return null;
		}	
	}
	
	public function setClose()
	{
		if($this->pdo!=null) 
		{
			$this->pdo = null;
		}
	}
	
	public function getQueries($query)
	{
		if(self::getConnection()!=null)
		{
			$qry = self::getConnection()->prepare($query);
			$qry->execute();
			$this->getclose();		
		}
		else
		{
			die("No se ha podido ejecutar la consulta");
		}	
	}
	
	public function getQueriesParams($query, $params)
	{
		// $query = "INSERT INTO clientes (id, razon, calle, telefono)
		//          VALUES (:p1, :p2, :p3, p4)";
		// $params = array("200", "SOLTEX SA", "Av. San Juan 1122", "334-2323")
		if(self::getConnection()!=null)
		{
			$par = array("", "");
			$qry = self::getConnection()->prepare($query);
			$p = 1;
			foreach($prm as $params)
			{
				$qry->bindParam(":p".$p, $prm);
				$p++;
			}
			$qry->execute();
			$this->getclose();
		}
		else
		{
			die("No se ha podido ejecutar la consulta");
		}		
	}
}
?>