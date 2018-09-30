<?php

namespace ControllerBase;

class ClientesController 
{

	public function index()
	{
		# Abrir pagina principal.
		require ROOT_APP.'/'.PATH_VIEW.'/clientes/index.ctp';		
	}
	
	public function add()
	{
		$GLOBALS['GETTER_SETTER'] = "123456789";
		require ROOT_APP.'/'.PATH_VIEW.'/clientes/_add.ctp';
	}
}
?>