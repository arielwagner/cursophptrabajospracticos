<?php 

class Errors {

	function __constructor() {
		self::__constructor();	
	}	
	
	public function error401() {
		$sc='<div id="sectionBody"><div id="box3">
		<h3>Acceso No Autorizado</h3>
		<p>Ud., no ha podido ser identificado correctamente. 
		Verifique que su nombre de usuario o su contrase&ntilde;a est&eacute;n bien escritos. 
		Recuerde que debe utilizar caracter adecuados para el proceso de inicio de sesi&oacute;n. 
		No se admiten caracteres tales como la barra, el signo numeral, el signo d&oacute;lar, etc., entre otros.</p>
		<p></p>
		<form action="./index.php" method="post">
		<input type="submit" value="Volver" />
		</form>';
		return $sc;
	}
	
	public function error204() {
		// otros errores
  	}
}

?>