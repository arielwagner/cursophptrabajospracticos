<?php

namespace ControllerBase;

class LaunchController 
{
	
	public function index()
	{
		# Abrir pagina principal.
		require ROOT_APP.'/'.PATH_VIEW.'/'.FOLDER_LAUNCH.'/index.ctp';
	}
}
?>