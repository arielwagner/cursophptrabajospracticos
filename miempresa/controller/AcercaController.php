<?php

namespace ControllerBase;

class AcercaController
{
	
	public function index()
	{
		# Abrir pagina principal.
		require ROOT_APP.'/'.PATH_VIEW.'/acerca/index.ctp';
	}
}
?>