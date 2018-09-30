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
			$NomApe = $_POST['txtNomApe'];
			$monto = $_POST["txtMonto"];
			$pagos = $_POST["txtPago"];
			$fina = new Finance();
			$cuota = $fina->pago($tnaMes/100, $monto, $pagos);
			$presMonto = $cuota * $pagos;
			$fina = null;
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
<tr><td class="fields">Valor de Pr&eacute;stamo</td><td class="fields1">$ <?php echo number_format($monto, 2, ",", "."); ?></td></tr>
<tr><td class="fields">TNA</td><td class="fields1">% <?php echo number_format($tna, 2, ",", "."); ?></td></tr>
<tr><td class="fields">Al&iacute;cuota Mensual</td><td class="fields1">% <?php echo number_format($tnaMes, 2, ",", "."); ?></td></tr>
<tr><td class="fields">Meses</td><td class="fields1"><?php echo $pagos; ?></td></tr>
<tr><td class="fields">Monto Total de Pr&eacute;stamo</td><td class="fields1">$ <?php echo number_format($presMonto, 2, ",", "."); ?></td></tr>
<tr><td class="fields">Valor Cuota</td><td class="fields1">$ <?php echo number_format($cuota, 2, ",", "."); ?></td></tr>
</table>
</div>
<div class="boxQuery3">
<table id="table1">
<thead>
<tr><th>N° Cuota</th><th>Pagos</th><th>Deuda</th><th>Saldo</th></tr>
</thead>
<tbody>
   	<?php
		$saldo[] = null;
		$deuda[] = null;
		$deuda[] = $presMonto;
		for($i = 1; $i < $pagos + 1; $i++) {
			if($i == 1) {
				$saldo[$i] = $deuda[$i] - $cuota;
			} else {
				$deuda[$i] = $saldo[$i - 1];
				$saldo[$i] = $deuda[$i] - $cuota;
			}
	?>
<tr>
<td><?php echo $i; ?></td>
<td>$ <?php echo number_format($cuota, 2, ",", "."); ?></td>
<td>$ <?php echo number_format($deuda[$i], 2, ",", "."); ?></td>
<td>$ <?php echo number_format($saldo[$i], 2, ",", "."); ?></td>
</tr>
<?php } ?>
</tbody>
<tfoot>
<tr><th>N° Cuota</th><th>Pagos</th><th>Deuda</th><th>Saldo</th></tr>
</tfoot>
</table>
</div>
<div class="boxQuery1"><p><a href="index.php">Volver</a><p></div>
</div>
<foot><div class="boxFoot"><p class="copyright">Banco del Sud de la Rep&uacute;blica Argentina - Copyright &copy; 2013</p></div></foot>
</body>
</body>
</html>
