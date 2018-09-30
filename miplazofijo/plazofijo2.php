<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Plazo Fijo - Banco del Sud SA</title>
<link href="css/styles.css" rel="stylesheet" type="text/css">
</head>
<?php
// Tabla de Cálculo de Plazo Fijo
$monto = 15000;
$tna = 11.7;
$tne = 10.87;
// Variables para las matrices...
$Rtna[13] = null;
$GMtna[13] = null;
$Rtne[13] = null;
$GMtne[13] = null;
// Cargar datos iniciales...
$GMtna[0] = $monto;
$GMtne[0] = $monto;
// Proceder a realizar los cálculos
for($i = 1; $i < 13; $i++) {
	$Rtna[$i] = (($tna * 30 * $GMtna[$i - 1])/36500);
	$GMtna[$i] = $Rtna[$i] + $GMtna[$i - 1];
	$Rtne[$i] = (($tne * 30 * $GMtne[$i - 1])/36500);
	$GMtne[$i] = $Rtne[$i] + $GMtne[$i - 1];
}
?>
<body>
<header><div class="boxHead">
<h1>Banco del Sud</h1><br>
<h2>Plazo Fijo - Tabla Anual de Inversi&oacute;n</h2>
</div>
</header>
<div class="boxMainBody">
<p class="parrafos">Plazo Fijo - Tabla Anual de Inversi&oacute;n</p>
<table>
	<thead>
	<tr><th colspan="2">
    Tabla Capital e Intereses
    </th></tr>
	<tr>
    </thead>
    <tbody>
  <tr>
    <td>Monto de Inversión</td>
    <td><?php echo "$ " . number_format($monto, 2); ?></td>
  </tr>
  <tr>
    <td>TNA</td>
    <td><?php echo "% " . number_format($tna, 2); ?></td>
  </tr>
  <tr>
    <td>TNE</td>
    <td><?php echo "% " . number_format($tne, 2); ?></td>
  </tr>
  </tbody>
</table>
<p class="parrafos">Rendimiento Anual desglosado por Meses</p>
<table>
  <thead><tr>
    <th>Mensual</td>
    <th>Capital Total TNA</td>
    <th>Rendimiento TNA</td>
    <th>Capital Total TNE</td>
    <th>Rendimiento TNE</td>
  </tr></thead>
  <tbody>
  <tr>
  <?php 
 	// Construye la Tabla de valores de forma dinámica...
	for($f = 1; $f < 13; $f++) {
  ?>
  <tr>
    <td>Mes <?php echo $f; ?></td>
    <td><?php echo "$ " . number_format($GMtna[$f], 2); ?></td>
    <td><?php echo "$ " . number_format($Rtna[$f], 2); ?></td>
    <td><?php echo "$ " . number_format($GMtne[$f], 2); ?></td>
    <td><?php echo "$ " . number_format($Rtne[$f], 2); ?></td>
  </tr>		
  <?php
	} // Aquí termina el bloque "For"
  ?>
  </tbody>
</table>
</div>
<p class="parrafosMinor">Datos actualizados seg&uacute;n referencias del Banco Central sujetos a cambios.</p>
</div>
<foot><div class="boxFoot"><p class="copyright">Banco del Sud de la Rep&uacute;blica Argentina - Copyright &copy; <?php echo date("Y"); ?></p></div></foot>
</body>
</html>
