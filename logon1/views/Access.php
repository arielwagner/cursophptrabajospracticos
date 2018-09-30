<?php 

require_once 'FrmLogon.php';
require_once 'recurso/recurso.php';
require_once 'errors/errors.php';

class Access  {

	function __constructor() {
		self::__constructor();	
	}	
	
	public function accessAction() {
		if(isset($_POST['txtUser']) && isset($_POST['txtPassword'])) {
			$userPost = trim($_POST["txtUser"]);
			$passPost = trim($_POST["txtPassword"]);
			// Procesar archivo de lista de usuarios...
			$vlineas = file("views/security/.htpass");
			// Procesar la lectura del archivo linea a linea...
			foreach ($vlineas as $sLinea){
				//Enlistar y recorrer los usuarios de la lista
				//de la base de datos cuyo archivo es .htpass
				list($user, $pass)=explode(":", $sLinea);
				// Determinar si el usuario logeado esta en la base de datos
				// La contrasena ha sido encriptada con el algoritmo MD5
				if(trim($user)==trim($userPost) && trim($pass)==trim(md5($passPost))) {
					// Acceso Autorizado...
					$vr = new Recurso();
					return $vr->recursoAction();
					exit;
				}
			}
			// Acceso Denegado...
			/*
				Si se llega a esta instancia, se supone que el
				usuario no existe en la lista de usuarios y
				no puede ser autorizado al ingreso del recurso.
			*/
			$ve = new Errors();
			return $ve->error401();
		} else {
			$vw=new FrmLogon();
			return $vw->logonAction();
		}
	}
}

?>