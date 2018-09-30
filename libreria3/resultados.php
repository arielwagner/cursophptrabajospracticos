<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Resultados de la Búsqueda en la Librería Online</title>
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
<b class="st1">Resultados de la B&uacute;squeda en la Librer&Iacute;a Online</b>
<?
  // Cargar las variables para el buscador
  $terminobusqueda = $_POST["txtterminobusqueda"];
  $tipobusqueda = $_POST["cmbtipobusqueda"];
  // Limpiar los valores de ingreso...
  trim($terminobusqueda);
  trim($tipobusqueda);
  if (!$tipobusqueda || !$terminobusqueda) {
     echo "<form method=\"post\" action=\"main.html\">";
     echo "<br>";
     echo "<b class=\"st2\">Insuficientes Datos.</b><br>";
     echo "Por favor, ingrese los datos correctamente y vuelva<br>";
     echo "a intertarlo nuevamente.<br>";
     echo "<br>";
     echo "<input type=\"submit\" name=\"button\" id=\"button\" value=\"Volver\" />";
     echo "</form>";
     exit;
  }
  // Filtrar las barras residuales...
  $tipobusqueda = addslashes($tipobusqueda);
  $terminobusqueda = addslashes($terminobusqueda);
  @ $db = mysql_pconnect("localhost", "root", "ariel");
  if (!$db) {
     echo "<form method=\"post\" action=\"main.html\">";
     echo "<br>";
     echo "<b class=\"st2\">Error: No se ha podido conectar a la base de datos.</b><br>";
     echo "Es recomendable que pruebe m&aacute;s tarde.";
     echo "<br>";
     echo "<input type=\"submit\" name=\"button\" id=\"button\" value=\"Volver\" />";
     echo "</form>";
     exit;
  }
  echo "<form method=\"post\" action=\"main.html\">";
  mysql_select_db("libreria");
  $consulta = "SELECT * FROM Libros WHERE " . $tipobusqueda .  " Like '%"  
  . addslashes(trim($terminobusqueda)) . "%'";
  $resultado = mysql_query($consulta);
  $num_resultados = mysql_num_rows($resultado);
  echo "<p>N&uacute;mero de libros encontrados: " . $num_resultados."</p>";
  // En caso de no haber registros en la tabla de la base de datos...
  if ($num_resultados == 0) {
     echo "<form method=\"post\" action=\"main.html\">";
     echo "<br>";
     echo "<b class=\"st2\">No Hay Registros.</b><br>";
     echo "No se han encontrado registros coincidentes.<br>";
     echo "Por favor, pruebe con otra combinaci&oacute;n de palabras. ";
     echo "<br>";
     echo "<input type=\"submit\" name=\"button\" id=\"button\" value=\"Volver\" />";
     echo "</form>";
     exit;
  }
  for ($i=0; $i <$num_resultados; $i++) {
     $row = mysql_fetch_array($resultado);
     echo "<p><strong>".($i + 1).". T&iacute;tulo: ";
     echo stripslashes($row[1]);  // Accede al Campo Title
     echo "</strong><br>A&ntilde;o de Edici&oacute;n: ";
     echo stripslashes($row[2]); // Accede al Campo Published
     echo "<br>ISBN: ";
     echo stripslashes($row[0]); // Accede al Campo ISBN
     echo "<br>Precio: ";
     echo "$ " . number_format(stripslashes($row[3]), 2, ','); // Accede al Campo Price
     echo "<br>";
     echo "<input type=\"submit\" name=\"button\" id=\"button\" value=\"Volver\" />";
  }
  echo "</form>";
?>
</body>
</html>