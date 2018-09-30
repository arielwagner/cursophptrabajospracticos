<?php 

require dirname(dirname(__FILE__)).'/'.PATH_VIEWS.'/headers.php';
require dirname(dirname(__FILE__)).'/'.PATH_MODELS.'/sessions.php';
require dirname(dirname(__FILE__)).'/'.PATH_MODELS.'/datas.php';

/**
* Clase de controles del proyecto.
*/
class SessionsController {
	
	function __constructor() {
		self::__constructor();
	}	
	
	public function indexAction() {
		$head=new Headers();
		$sess=new Sessions();
		$dts=new Datas();
		$sess->sessionOn();
		
		// Verificar si existe el usuario.
		if($_POST['btnForgotUser']=='Aceptar') {
			$userD = trim($_POST['txtForgotUser']);
			$result=$dts->getUser($userD);
			return $head->resultUser($dts);
			exit;
		}
		if($_GET['logon']=='forgot') {
			return $head->forgotUser();
		}
		// *******************************
		
		// Agregar nuevo usuario.
		if($_POST['btnRegisterUser']=='Aceptar') {
			if(trim($_POST['txtRegisterUser']!='') &&
				trim($_POST['txtRegisterPass']!='')) {
				$userD=trim($_POST['txtRegisterUser']);
				$passD=trim($_POST['txtRegisterPass']);
				$dts->addRegisterUser($userD, $passD);
				return $head->offLogon();
			} else {
				return $head->errorRegisterUser();
			}
		}
		if($_GET['logon']=='register') {
			return $head->newRegisterUser();
		}
		// *******************************
		
		// Verificar si el usuario puede descargar archivo.
		if($_GET['down']=='down1' && $_SESSION['statusSE']=='Login') {
			$file = dirname(dirname(str_replace('\\', '/', __FILE__))).'/'
			.PATH_VIEWS.'/'.PATH_STORES."/Guia_PHP_SQL.pdf";
			if(file_exists($file)) {
				  header('Content-Description: File Transfer');
				  header('Content-Type: application/octet-stream');
				  header('Content-Disposition: attachment; filename='.basename($file));
				  header('Content-Transfer-Encoding: binary');
				  header('Expires: 0');
				  header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
				  header('Pragma: public');
				  header('Content-Length: '.filesize($file));
				  ob_clean();
				  flush();
				  readfile($file);
			}
			return $head->onLogon();
		}		
		
		// Cerrar la sesion.
		if($_GET['logon']=='Off') {
			$sess->sessionOff();
			header('Location: index.php');
		}
		
		// Manejo de las sesiones.
		if(!isset($_SESSION['userSE']) && !isset($_SESSION['passSE']) && !isset($_SESSION['statusSE'])) {
			if(!isset($_POST['txtUser']) && !isset($_POST['txtPass'])){
				$sess->sessionOff(); // Destruir sesion forzadamente.
				return $head->offLogon();
			} else {
				$sess->sessionOn();
				// Cargar datos desde la ventanilla...		
				$userD = trim($_POST['txtUser']);
				$passD = trim($_POST['txtPass']);
				$result=$dts->getListado($userD, $passD);
				if($dts->countRows() > 0) {
					// Cargar los datos en las sesiones.
					$field=$dts->getRow();
					$_SESSION['userSE']=$field[1];
					$_SESSION['passSE']=$field[2];
					$_SESSION['statusSE']='Login'; // Activar el Login
					$dts->setClose();
					return $head->onLogon();
				} else {
					// Limpiar los datos residuales.
					$userD='';
					$passD='';
					$_POST['txtUser']='';
					$_POST['txtPass']='';
					$_SESSION['userSE']='';
					$_SESSION['passSE']='';				
					$_SESSION['statusSE']='';
					unset($_POST['txtUser']);
					unset($_POST['txtPass']);
					unset($_SESSION['userSE']);
					unset($_SESSION['passSE']);				
					unset($_SESSION['statusSE']);
					$dts->setClose();
					$sess->sessionOff();
					return $head->errorLogon();
				} // Filas
			 } // InputText			
		} else {
			$sess->sessionOff(); // Destruir sesion forzadamente.
			return $head->offLogon();			
		}
	}
}
?>