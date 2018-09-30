<?php

namespace ControllerBase;

class ProveedoresController
{
	
	public function index()
	{
		# Abrir pagina principal.
		require ROOT_APP.'/'.PATH_VIEW.'/proveedores/index.ctp';		
	}
}
?>