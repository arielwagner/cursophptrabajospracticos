<?php 
	
class Recurso {
	
	function __constructor() {
		self::__constructor();
	}
	
	public function recursoAction() {
		$sc='<div id="sectionBody"><div id="box2">
		<h3>Bienvenido...</h3>
		<p>Ud., se encuentra en una zona autorizada. En esta secci&oacute;n, el usuario tendra privilegios 
		de acceso a los datos y servicios que proporciona esta zona. Los usuarios no autorizados, no 
		podran hacer uso de este recurso y no podran acceder a ellos. Este mecanismo creado sera un 
		&aacute;rea solo para los usuarios registrados.</p>
		<p></p>
		<form action="./index.php" method="post">
		<input type="submit" value="Volver" />
		</form>
		</div>
		</div>';
		return $sc;	
	}
}
?>