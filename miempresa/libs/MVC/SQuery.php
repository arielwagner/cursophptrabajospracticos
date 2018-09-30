<?php

class SQuery extends Connection
{
	
	public function getQuery($query)
	{
		try
		{
			$db = $this->getConnection();
			$page = $db->prepare($query);
			$page->execute();
			$rows = $page->fetchAll(PDO::FETCH_ASSOC);
			$this->setClose();		
			return $rows;
		}
		catch (Exception $ex)
		{
			return null;	
		}
	}
}
?>