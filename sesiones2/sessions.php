<?php

/**
* Clase de manejo de Sesiones para las membrecias.
*/
class Sessions {
	
	// Inicia la sesion
	public function sessionOn() {
		session_start();
	}
	
	// Destruye la sesion
	public function sessionOff() {
		session_destroy();
	}
	
	// Finaliza todas las sesiones
	public function sessionFinalize() {
		session_start();
		session_destroy();
	}
}
?>