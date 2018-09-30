<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Banco del Sud - Consulta Online</title>
<link href="css/styles1.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php 
	// Declarar variables y librerias.
	require_once 'finance.php';
	$NomApe = "";
	$monto = 0;
	$pagos = 0;
	$cuota = 0;
	$tna =  11;
	$tnaMes = 11/12;
	$presMonto = 0;
    // Verificar si los datos son correctos...
	if(isset($_POST['txtNomApe']) && isset($_POST['txtMonto']) && isset($_POST['txtPago'])) {
		if(!is_numeric($_POST['txtNomApe']) && is_numeric($_POST['txtMonto']) && is_numeric($_POST['txtPago']) ) {
			// Valores para el c�lculo...
			$fina = new Finance();
			$NomApe = $_POST['txtNomApe'];
			$fina->_monto = $_POST['txtMonto'];
			$fina->_pagos = $_POST['txtPago'];
			$fina->_tna = $_POST['txtTNA'];
			$fina->calcular();
/* 			$cuota = $fina->pago($tnaMes/100, $monto, $pagos);
			$presMonto = $cuota * $pagos; */
		} else {
			require_once 'error.php';
			exit;
		}
	}
?>
<header><div class="boxHead">
<h1>Banco del Sud</h1><br>
<h2>Plazo Fijo - Consultas Online</h2>
</div>
</header>
<div class="boxMainBody">
<h3>C&aacute;lculo de Financiaci&oacute;n</h3>
<div class="boxQuery1">
<table>
<tr><td class="fields">Beneficiario:</td><td class="fields1"><?php echo $_POST['txtNomApe']; ?></td></tr>
</table>
</div>
<div class="boxQuery2">
<table>
<tr><td class="fields">Valor de Pr&eacute;stamo</td><td class="fields1">$ <?php echo number_format($fina->_monto, 2, ",", "."); ?></td></tr>
<tr><td class="fields">TNA</td><td class="fields1">% <?php echo number_format($fina->_tna, 2, ",", "."); ?></td></tr>
<tr><td class="fields">Al&iacute;cuota Mensual</td><td class="fields1">% <?php echo number_format($fina->_tnaMensual, 2, ",", "."); ?></td></tr>
<tr><td class="fields">Meses</td><td class="fields1"><?php echo $fina->_pagos; ?></td></tr>
<tr><td class="fields">Monto Total de Pr&eacute;stamo</td><td class="fields1">$ <?php echo number_format($fina->_presMonto, 2, ",", "."); ?></td></tr>
<tr><td class="fields">Valor Cuota</td><td class="fields1">$ <?php echo number_format($fina->_cuota, 2, ",", "."); ?></td></tr>
</table>
</div>
<div class="boxQuery3">
<table id="table1">
<thead>
<tr><th>N&deg; Cuota</th><th>Pagos</th><th>Deuda</th><th>Saldo</th></tr>
</thead>
<tbody>
   	<?php
		// 			
		for($i = 1; $i < $fina->_pagos + 1; $i++) {
	?>
<tr>
<td><?php echo $i; ?></td>
<td>$ <?php echo number_format($fina->_cuota, 2, ",", "."); ?></td>
<td>$ <?php echo number_format($fina->_deuda[$i], 2, ",", "."); ?></td>
<td>$ <?php echo number_format($fina->_saldo[$i], 2, ",", "."); ?></td>
</tr>
<?php } ?>
</tbody>
<tfoot>
<tr><th>N&deg; Cuota</th><th>Pagos</th><th>Deuda</th><th>Saldo</th></tr>
</tfoot>
</table>
</div>
<div class="boxQuery1"><p><a href="index.php">Volver</a><p></div>
</div>
<foot><div class="boxFoot"><p class="copyright">Banco del Sud de la Rep&uacute;blica Argentina - Copyright &copy; 2013</p></div></foot>
</body>
</body>
</html>
