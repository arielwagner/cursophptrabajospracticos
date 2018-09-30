<?php

/**
 * @author  Wagner, Ariel Alejandro
 * @copyright Job Systems Solutions
 * VIEWS - Vistas para la pantalla.
 *
 */

require_once '../control/controls.php';

// Determina el estado de la pantalla.
if(trim($_POST['txtterminobusqueda'])=='') {
	setScreenForm(normalForm());
	exit;
} else {
	setScreenForm(foundForm());
	exit;
}

// Formulario normal de búsqueda.
function normalForm() {
	$ec = '<form id="form1" name="form1" method="post" action="../view/views.php">
	  <table width="284" border="0" cellspacing="0" cellpadding="0">
	    <tr>
	      <td width="284" class="st2">Seleccione el tipo de búsqueda</td>
	    </tr>
	    <tr>
	      <td>
	      <select name="cmbtipobusqueda" id="cmbtipobusqueda">
	      <option value="title" selected="selected">T&iacute;tulo
	      <option value="published">A&ntilde;o
	      <option value="isbn">ISBN
	    </select>
	    </td>
	    </tr>
	    <tr>
	      <td class="st2">Escriba lo que desea buscar</td>
	    </tr>
	    <tr>
	      <td><input type="text" name="txtterminobusqueda" id="txtterminobusqueda" /></td>
	    </tr>
	    <tr>
	      <td>&nbsp;</td>
	    </tr>
	    <tr>
	      <td><input type="submit" name="button" id="button" value="Buscar..." /></td>
	    </tr>
	  </table>
	</form>';
	return $ec;
}

// Resultado de las búsquedo.
function foundForm() {
    $CTL=new Controls();
	$CTL->indexPage();
	return $CTL->getScreen();
}

// Composición de la pantalla.
function setScreenForm($screen) {
	$ec='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title></title>
	<link href="Styles/styles.css" rel="stylesheet" type="text/css" />
	<style type="text/css">
	<!--
	body {
		background-color: #E7E9EA;
	}
	-->
	</style>
	</head>
	<body>
	<p><b class="st1">Buscando en Librer&iacute;a Online</b>
	</p>
	'.$screen.'		
	</body>
	</html>';
	echo $ec;
}
?>