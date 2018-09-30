<?php 

require_once 'headers.php';
require_once 'sessions.php';
require_once 'datas.php';

/**
* Clase de controles del proyecto.
*/
class Controller {
	
	function __constructor() {
		self::__constructor();
	}	
	
	public function indexAction() {
		$head=new Headers();
		$sess=new Sessions();
		$dts=new Datas();
		$sess->sessionOn();
		
		// Verificar si el usuario puede descargar archivo.
		if($_GET['down']=='down1' && $_SESSION['statusSE']=='Login') {
			$file = "stores/Guia_PHP_SQL.pdf";
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
		}
		
		// Manejo de las sesiones.
		if(!isset($_SESSION['userSE']) && !isset($_SESSION['passSE']) && !isset($_SESSION['statusSE'])) {
		if(!isset($_POST['txtUser']) && !isset($_POST['txtPass'])){
			$sess->sessionOff(); // Destruir sesion forzadamente.
			return $head->offLogon();
			exit;
		} else {
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
				exit;
			} else {
				// Limpiar los datos residuales.
				$sess->sessionOff();
				$userD='';
				$passD='';
				$_POST['txtUser']='';
				$_POST['txtPass']='';
				$_SESSION['userSE']='';
				$_SESSION['passSE']='';				
				$_SESSION['statusSE']='';
				$dts->setClose();
				return $head->errorLogon();
				exit;
			} // Filas
		 } // InputText			
		} else {
			$sess->sessionOff(); // Destruir sesion forzadamente.
			return $head->offLogon();			
		}
	}
}
?>