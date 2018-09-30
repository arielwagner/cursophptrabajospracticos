<?php

class DQuery extends Connection
{
	
	public function getExecuteQuery($query)
	{
		try {
			$this->conn->beginTransaction();
			$rec = $this->conn->prepare($query);
			$rec->execute();
			$this->conn->commit();
			$this->conn=null;
		} catch (PDOException $ex) {
			$this->conn->rollback();
			echo "<script>alert('.$ex->getMessage().')</script>";
			$this->conn=null;
		}
	}
	
	public function getExecuteQueryParams($query, $params)
	{
		try {
			$this->conn->beginTransaction();
			$rec = $this->conn->prepare($query);
			$p = 0; $prm = "";
			foreach($prm as $params)
			{
				$rec->bindParam(":p".$p, $prm);
				$p++;
			}
			$rec->execute();
			$this->conn->commit();
			$this->conn=null;
		} catch (PDOException $ex) {
			$this->conn->rollback();
			echo "<script>alert('.$ex->getMessage().')</script>";
					$this->conn=null;
		}
	}	
}
?>