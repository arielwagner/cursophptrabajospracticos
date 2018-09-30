<?php

class Connection 
{ 
	protected $db;

	function __construct() 
	{
		$this->db = new mysqli(
			'localhost', 'root',
			'', '', '3306', ''
		);
	}	
	
	/**
	 * Determina si está conectado.
	 * @return Devuelve valor booleano.
	 */
	public function isConnected() 
	{
		return ((bool) ($this->db instanceof mysqli));
	}
	
	/**
	 * Cerrar la conexión hacia la base de datos.
	 */
	public function setClose() 
	{
		if ($this->isConnected()) 
		{
			$this->db->close();
		}
		$this->db = null;
	}	
}
?>