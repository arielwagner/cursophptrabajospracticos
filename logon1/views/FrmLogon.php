<?php 

class FrmLogon {
	
	function __constructor() {
		self::__constructor();
	}
	
	public function logonAction() {
		$sc='<div id="box1">
		<h4>Inicio de Sesi&oacute;n</h4>
		<form action="index.php" method="post">
		<div><label>Usuario:</label></div>
		<div><input type="text" id="txtUser" name="txtUser" 
		required="required" placeholder="Usuario" />
		</div>
		<div><label>Contrase&ntilde;a: </label></div>
		<div><input type="password"" id="txtPassword" name="txtPassword" 
		required="required" placeholder="Contrase&ntilde;a" />
		</div>
		<p></p>
		<div>
		<input type="submit" id="btnOnLogon" name="btnOnLogon" value="Iniciar" />
		<input type="reset" value="Cancelar" />
		</div>
		</form></div>';
		return $sc;	
	}
}
?>