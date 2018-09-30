<?php

require_once 'models/connection.php';

class SQueries extends Connection 
{
	private $results;
	
	/**
	 * Consultas en general.
	 * @param  String $query Consultas.
	 * @return Devuelve un Resultset.
	 */
	public function getQuery($query)
	{
		try 
		{
			$this->db->select_db('members');
			if(!$this->db) 
			{
				throw new Exception('Error : '.mysqli_error($this->db));
			}
			// Consulta de carta del catálogo.
			$querys= $query; // Cadena de consulta.
			$this->results = $this->db->query($querys);
			if(!$this->results) 
			{
				throw new Exception('Error : '.mysqli_error($this->db));
			}
			return $this->results;
		} 
		catch (Exception $ex) 
		{
			return null;
		}		
	}
	
	// 
	/**
	 * Devuelve la cantidad de registros.
	 * @return Integer Retorna el número de filas.
	 */
	public function countRows() 
	{
		return mysqli_num_rows($this->results);
	}
	
	// 
	/**
	 * Devuelve la estructura de la Fila.
	 * @return Objet Row Devuelve un objeto de tipo Row.
	 */
	public function getRow() 
	{
		return mysqli_fetch_array($this->results);
	}
}
?>