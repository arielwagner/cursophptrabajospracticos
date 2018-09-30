<?php 

/**
* Clase de manejo de mensajes y formulario para la Cabecera.
*/
class Headers {
	
	function __constructor() {
		self::__constructor();	
	}
	
	public function offLogon() {
		$sc='<label><p>INICIAR SESI&Oacute;N</p></label>
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
		<td></td>
		<td><a href="sesiones.php?logon=register&amp;">
		Registrarse</a></td>
		<td></td>
		<td><a href="sesiones.php?logon=forgot&amp;">
		&iquest;Olvido su Contrase&ntilde;a?</a></td>
		</tr></table></form>';
		return $sc;
	}
	
	public function onLogon() {
		$sc='<label><p>SESI&Oacute;N ABIERTA - BIENVENIDO</p></label>
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
		<label><p>ACCESO DENEGADO</p></label>
		<label><p>El usuario no existe en la base de datos. Verifique 
		los datos ingresados y vuelva a intentarlo nuevamente.</p></label>
		<p></p>
		<label><a href="sesiones.php?logon=errorLogon&amp;">
		Reintentar</a></label>';
		return $sc;				
	}
	
	public function forgotUser() {
		$sc='<label><p>DATOS DEL USUARIO</p></label>
		<form id="frmForgot" name="frmForgot" class="sesiones.php" method="post">
		<table><tr><td>&nbsp;</td>
		<td>Usuario: </td><td><input id="txtForgotUser" name="txtForgotUser" 
		type="text" required="required" placeholder="Usuario"></td><td></td>
		<tr><td>&nbsp;</td><td>&nbsp;</td>
		<td><input type="submit" id="btnForgotUser" name="btnForgotUser" value="Aceptar"></td>
		<td><a href="sesiones.php">Cancelar</a></td>
		</tr></tr></table>
		</form><p></p>';
		return $sc;	
	}
	
	public function resultUser($dts) {
		if($dts->countRows() > 0) {
			$field=$dts->getRow();
			$sc='<p></p>
			<label><p>DATOS DEL USUARIO</p></label>
			<p></p>
			<label>Usuario: '.$field[1].' - Contrase&ntilde;a: '.$field[2].'</label>
			<p><a href="sesiones.php">Iniciar Sesi&oacute;n</a></p>
			<p></p>';
		} else {
			$sc='<p></p>
			<label><p>DATOS DEL USUARIO</p></label>
			<p>El usuario no se encuentra en la base de datos.</p>
			<p><a href="sesiones.php">Iniciar Sesi&oacute;n</a></p>
			<p></p>';
		}
		return $sc;
	}

	public function newRegisterUser() {
		$sc='<script language="javascript"> 
		function checkPassword() { 
			if (document.frmRegister.txtRegisterPass.value 
			    != document.frmRegister.txtRegisterPass2.value) { 
				document.getElementById("onError").textContent="Error...";
				document.getElementById("btnRegisterUser").disabled=true;
			}  else {
				document.getElementById("onError").textContent="";
				document.getElementById("btnRegisterUser").disabled=false;
			}
		}
		</script>
		<label><p>REGISTRO DEL USUARIO</p></label>
		<form id="frmRegister" name="frmRegister" class="sesiones.php" method="post">
		<table><tr><td><p>Usuario: </p></td><td><input id="txtRegisterUser" name="txtRegisterUser" 
		type="text" required="required" placeholder="Usuario"></td>
		<td><p>Contrase&ntilde;a: </p></td><td><input id="txtRegisterPass" 
		name="txtRegisterPass" type="text" required="required" 
		placeholder="Contrase&ntilde;a"></td><td>Confirmar: </td>
		<td><input id="txtRegisterPass2" 
		name="txtRegisterPass2" type="text" required="required" 
		placeholder="Confirmar" onFocus="checkPassword(this)" 
		onBlur="checkPassword(this)"><div id="onError" style="color:#F00"></div>
		</td><td></td><td><input type="submit" id="btnRegisterUser" 
		name="btnRegisterUser" value="Aceptar"></td>
		<td><a href="sesiones.php">Cancelar</a></td>
		</tr></table></form>';
		return $sc;	
	}
	
	public function errorRegisterUser() {
		$sc='<p></p>
		<label><p>ERROR DE REGISTRO</p></label>
		<label><p>Se ha producido un error inexperado y no ha podido ser
		guardado el registro del usuario. Por favor, vuelva a intentarlo 
		de nuevo.</p></label>
		<p></p>
		<label><a href="sesiones.php?logon=errorLogon&amp;">
		Reintentar</a></label>';
		return $sc;				
	}
}
?>