<?php

$ec ='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>

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
<form id="form1" name="form1" method="post" action="resultados.php">
  <table width="284" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="284" class="st2">Seleccione el tipo de b&uacute;squeda</td>
    </tr>
    <tr>
      <td>
      <select name="cmbtipobusqueda">
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
      <td><input type="text" name="txtterminobusqueda" id="terminobusqueda" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><input type="submit" name="button" id="button" value="Buscar..." /></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>';
echo $ec;


?>