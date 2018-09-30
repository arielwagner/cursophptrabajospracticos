<?php

require_once 'datas.php';

$libs=new Datas();

$ec = '<html>
<head>
  <title>Resultados de la B&uacute;squeda en la Librer&iacute;a Online</title>
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
<b class="st1">Resultados de la B&uacute;squeda en la Librer&iacute;a Online</b>';

// Cargar las variables para el buscador
$terminobusqueda = $_POST['txtterminobusqueda'];
$tipobusqueda = $_POST['cmbtipobusqueda'];
// Limpiar los valores de ingreso...
if (!trim($terminobusqueda)) {
	$ec .='<form method="post" action="main.php">
     <br>
     <b class="st2">Insuficientes Datos.</b><br>
     Por favor, ingrese los datos correctamente y vuelva<br>
     a intertarlo nuevamente.<br>
     <br>
     <input type="submit" name="button" id="button" value="Volver" />
     </form>
	</body></html>';
  	echo $ec;
  	exit;
}

// Verificar conexión a base de datos...
if (!$libs->setConection()) {
 	$ec .='<form method="post" action="main.php">
    <br>
    <b class="st2">Error: No se ha podido conectar a la base de datos.</b><br>
    Es recomendable que pruebe m&aacute;s tarde.
    <br>
    <input type="submit" name="button" id="button" value="Volver" />
    </form>
 	</body></html>';
 	echo $ec;
    exit;
}
// Filtrar las barras residuales...
$tipobusqueda = addslashes($tipobusqueda);
$terminobusqueda = addslashes($terminobusqueda);
// Procesar la consulta...
$resultado=$libs->getQuery($tipobusqueda, $terminobusqueda);
// Determinar si hay registros
if($libs->countRows()==0) {
	$ec .='<form method="post" action="main.php">
	<br>
	<b class="st2">No Hay Registros.</b><br>
	No se han encontrado registros coincidentes.<br>
	Por favor, pruebe con otra combinación de palabras.
	<br>
	<input type="submit" name="button" id="button" value="Volver" />
	</form>
	</body></html>';
	echo $ec;
	exit;
}
// Cargar el listado...
$ec .='<p>N&uacute;mero de libros encontrados: '.$libs->countRows().'</p>
<form method="post" action="main.php"';
for ($i=0; $i <$libs->countRows(); $i++) {
	$row = $libs->getRow();
	$ec .='<p><strong>'.($i + 1).'. T&iacute;tulo: '.stripslashes($row[1]).'
	</strong><br>Año de Edición: '.stripslashes($row[2]).'
	<br>ISBN: '.stripslashes($row[0]).'
	<br>Precio: $'.number_format(stripslashes($row[3]), 2, ",").'
	<br>
	<input type="submit" name="button" id="button" value="Volver" />';
}
$ec .='</form>
</body></html>';
echo $ec;
?>