<?php

/**
* Clase de manejo de Sesiones para las membrecias.
* Desarrollado por Job Systems Solutions.
* Autor: Ariel Alejandro Wagner.
* Limitada - Solo uso educativo.
*/
class Sessions {
	
	// Inicia la sesion.
	public function sessionOn() {
		session_start();
	}
	
	// Destruye la sesion.
	public function sessionOff() {
		session_unset();
		session_destroy();
	}
	
	// Destruye la sesion y recrea para una nueva.
	public function sessionOffRecreate() {
		session_unset();
		session_destroy();
		session_start();
		session_regenerate_id(true);
	}
	
	// Finaliza todas las sesiones
	public function sessionFinalize() {
		session_start();
		session_destroy();
	}
	
	// Hacer que la sesion no sea Cacheable.
	public function nonCacheSession(){
		header("Expires: Tue, 01 Jul 2001 06:00:00 GMT");
		header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
		header("Cache-Control: no-store, no-cache, must-revalidate");
		header("Cache-Control: post-check=0, pre-check=0", false);
		header("Pragma: no-cache");
	}
}
?>