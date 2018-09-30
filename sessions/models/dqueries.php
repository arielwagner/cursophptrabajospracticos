<?php

require_once 'models/connection.php';

class DQueries extends Connection {
	
	/**
	 * Ejecutar consultas de cambios o dinámicas.
	 * @param  $setPrepareQuery Consultas.
	 * @return boolean  Returna true (Exitoso) o false (Error)
	 */
	public function executeNonQuery($setPrepareQuery)
	{
		try
		{
            $res = true;
            $results = '';
            $this->db->select_db('members');        
            $results = $this->db->query($setPrepareQuery); // mysql_query($query);
			if(!$results) {
				throw new Exception('Error de Tabla: '.mysqli_error($this->db));
			}            
            $this->setClose();        
			return $res;
		}
		catch(Exception $ex)
		{
			return false;
		}
	}
}
?>