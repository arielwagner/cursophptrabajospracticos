<?php

require_once('../model/models.php');

/**
 * @author  Wagner, Ariel Alejandro
 * @copyright Job Systems Solutions
 * CONTROLLER - Control para el manejo del negocio y la vista.
 *
 */
class Controls {
	
	private $_outScreen;
	
	// Soporte para la página principal.
	public function indexPage() {
		$modelo=new Models();
		$terminobusqueda = trim($_POST["txtterminobusqueda"]);
		$tipobusqueda = trim($_POST["cmbtipobusqueda"]);
		// Filtrar las barras residuales...
		$tipobusqueda = addslashes($tipobusqueda);
		$terminobusqueda = addslashes($terminobusqueda);
		$modelo->getListado($tipobusqueda, $terminobusqueda);
		if($modelo->countRows() > 0) { 
			$this->showResults($modelo->arrayRes);
			$modelo->setClose();
		} else {
			$this->showErrorsEmptyRegisters();
			$modelo->setClose();
		}
	}
	
	// En caso de no encontrar registros.
	public function showErrorsEmptyRegisters() {
		$ec ='<form method="post" action="../view/views.php">
		<br>
		<b class="st2">No Hay Registros.</b><br>
		No se han encontrado registros coincidentes.<br>
		Por favor, pruebe con otra combinaci&oacute;n de palabras.
		<br>
		<input type="submit" name="button" id="button" value="Volver" />
		</form>';
		$this->_outScreen=$ec;
	}
	
	// Mostrar los datos hallados.
	public function showResults($setArrayResultSet) {
		$ec ='<form method="post" action="../view/views.php">
		<p>N&uacute;mero de libros encontrados: "'.$setArrayResultSet[4][0].'"</p>';
		// Bucle de carga de listado...
		for ($i=0; $i < $setArrayResultSet[4][0]; $i++) {
		$ec .='<p><strong>"'.($i + 1).'". T&iacute;tulo:'
		.$setArrayResultSet[1][$i]
		.'</strong><br>A&ntilde;o de Edici&oacute;n:'
		.$setArrayResultSet[2][$i]
		.'<br>ISBN: '
		.$setArrayResultSet[0][$i]
		.'<br>Precio: '
		.$setArrayResultSet[3][$i]
		.'<br>
		<input type="submit" name="button" id="button" value="Volver" />';
		}
		$ec .='</form>';
		$this->_outScreen=$ec;
	}
	
	// Preparación en pantalla de para las vistas.
	public function getScreen() {
		return $this->_outScreen;
	}
}
?>