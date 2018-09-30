<?php 

/**
* Clase de manejo de mensajes y formulario para la Cabecera.
*/
class Headers {
	
	function __constructor() {
		self::__constructor();	
	}
	
	public function offLogon() {
		$sc='<p></p>
		<form id="frmOffLogon" name="frmOffLogon" class="sesiones.php" method="post">
		<table><tr>
		<td><img src="images/lampOff.png" width="16" height="16"></td>
		<td>Usuario: </td>
		<td><input id="txtUser" name="txtUser" type="text" required="required" 
		placeholder="Usuario"></td>
		<td>Contrase&ntilde;a: </td>
		<td><input id="txtPass" name="txtPass" type="password" required="required"
		placeholder="Contrase&ntilde;a"></td>
		<td>&nbsp;</td>
		<td><input type="submit" id="btnOk" name="btnOk" value="Aceptar" /></td>
		<td><input type="reset" value="Cancelar" /></td>
		</tr></table></form>';
		return $sc;
	}
	
	public function onLogon() {
		$sc='<p></p>
		<table><tr>
		<td><img src="images/lampOn.png" width="16" height="16"></td>
		<td>Usuario: </td>
		<td>'.$_SESSION['userSE'].'</td>
		<td> - </td>
		<td><a href="sesiones.php?logon=off&amp;">Cerrar Sesi&oacute;n</a></td>
		</tr></table>';
		return $sc;		
	}
	
	public function errorLogon() {
		$sc='<p></p>
		<label><h3>ACCESO DENEGADO</h3></label>
		<label><p>El usuario no existe en la base de datos. Verifique 
		los datos ingresados y vuelva a intentarlo nuevamente.</p></label>
		<p></p>
		<label><a href="sesiones.php?logon=errorLogon&amp;">
		Reintentar</a></label>';
		return $sc;				
	}
}
?>