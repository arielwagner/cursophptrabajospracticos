<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Plazo Fijo - Bando del Sud SA</title>
<link href="css/styles.css" rel="stylesheet" type="text/css">
<head>
</head>
<body>
<?php

// Tabla de C�lculo de Plazo Fijo...
$monto = 15000;
$tna = 14.7;
$tne = 12.87;
// Iniciar c�lculos para la tabla...
// Mes 1
$R1tna = (($tna * 30 * $monto)/36500);
$GM1tna = $R1tna + $monto;
$R1tne = (($tne * 30 * $monto)/36500);
$GM1tne = $R1tne + $monto;
// Mes 2
$R2tna = (($tna * 30 * $GM1tne)/36500);
$GM2tna = $R2tna + $GM1tna;
$R2tne = (($tne * 30 * $GM1tne)/36500);
$GM2tne = $R2tne + $GM1tne;
// Mes 3
$R3tna = (($tna * 30 * $GM2tne)/36500);
$GM3tna = $R3tna + $GM2tna;
$R3tne = (($tne * 30 * $GM2tne)/36500);
$GM3tne = $R3tne + $GM2tne;
// Mes 4
$R4tna = (($tna * 30 * $GM3tne)/36500);
$GM4tna = $R4tna + $GM3tna;
$R4tne = (($tne * 30 * $GM3tne)/36500);
$GM4tne = $R4tne + $GM3tne;
// Mes 5
$R5tna = (($tna * 30 * $GM4tne)/36500);
$GM5tna = $R5tna + $GM4tna;
$R5tne = (($tne * 30 * $GM4tne)/36500);
$GM5tne = $R5tne + $GM4tne;
// Mes 6
$R6tna = (($tna * 30 * $GM5tne)/36500);
$GM6tna = $R6tna + $GM5tna;
$R6tne = (($tne * 30 * $GM5tne)/36500);
$GM6tne = $R6tne + $GM5tne;
// Mes 7
$R7tna = (($tna * 30 * $GM6tne)/36500);
$GM7tna = $R7tna + $GM6tna;
$R7tne = (($tne * 30 * $GM6tne)/36500);
$GM7tne = $R7tne + $GM6tne;
// Mes 8
$R8tna = (($tna * 30 * $GM7tne)/36500);
$GM8tna = $R8tna + $GM7tna;
$R8tne = (($tne * 30 * $GM7tne)/36500);
$GM8tne = $R8tne + $GM7tne;
// Mes 9
$R9tna = (($tna * 30 * $GM8tne)/36500);
$GM9tna = $R9tna + $GM8tna;
$R9tne = (($tne * 30 * $GM8tne)/36500);
$GM9tne = $R9tne + $GM8tne;
// Mes 10
$R10tna = (($tna * 30 * $GM9tne)/36500);
$GM10tna = $R10tna + $GM9tna;
$R10tne = (($tne * 30 * $GM9tne)/36500);
$GM10tne = $R10tne + $GM9tne;
// Mes 11
$R11tna = (($tna * 30 * $GM10tne)/36500);
$GM11tna = $R11tna + $GM10tna;
$R11tne = (($tne * 30 * $GM10tne)/36500);
$GM11tne = $R11tne + $GM10tne;
// Mes 12
$R12tna = (($tna * 30 * $GM11tne)/36500);
$GM12tna = $R12tna + $GM11tna;
$R12tne = (($tne * 30 * $GM11tne)/36500);
$GM12tne = $R12tne + $GM11tne;

?>
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
	<td>Monto de Inversi&oacute;n</td><td><?php echo $monto; ?></td>
	</tr>
    <tr>
	<td>TNA</td><td><?php echo $tna; ?></td>
	</tr><tr>
	<td>TNE</td><td><?php echo $tne; ?></td>
	</tr>
    </tbody>
</table>
<p class="parrafos">Rendimiento Anual Desglosado en Meses</p>
<table>
<thead>
<tr>
 <th>Mensual</th><th>Capital Total TNA</th><th>Rendimiento TNA</th><th>Capital Total TNE</th><th>Rendimiento TNE</th>
</tr>
</thead>
<tbody>
<tr>
 <td><?php echo "1"; ?></td><td><?php echo $GM1tna; ?></td><td><?php echo $R1tna; ?></td><td><?php echo $GM1tne; ?></td><td><?php echo $R1tne; ?></td>
</tr><tr>
 <td><?php echo "2"; ?></td><td><?php echo $GM2tna; ?></td><td><?php echo $R2tna; ?></td><td><?php echo $GM2tne; ?></td><td><?php echo $R2tne; ?></td>
</tr><tr>
 <td><?php echo "3"; ?></td><td><?php echo $GM3tna; ?></td><td><?php echo $R3tna; ?></td><td><?php echo $GM3tne; ?></td><td><?php echo $R3tne; ?></td>
</tr><tr>
 <td><?php echo "4"; ?></td><td><?php echo $GM4tna; ?></td><td><?php echo $R4tna; ?></td><td><?php echo $GM4tne; ?></td><td><?php echo $R4tne; ?></td>
</tr><tr>
 <td><?php echo "5"; ?></td><td><?php echo $GM5tna; ?></td><td><?php echo $R5tna; ?></td><td><?php echo $GM5tne; ?></td><td><?php echo $R5tne; ?></td>
</tr><tr>
 <td><?php echo "6"; ?></td><td><?php echo $GM6tna; ?></td><td><?php echo $R6tna; ?></td><td><?php echo $GM6tne; ?></td><td><?php echo $R6tne; ?></td>
</tr><tr>
 <td><?php echo "7"; ?></td><td><?php echo $GM7tna; ?></td><td><?php echo $R7tna; ?></td><td><?php echo $GM7tne; ?></td><td><?php echo $R7tne; ?></td>
</tr><tr>
 <td><?php echo "8"; ?></td><td><?php echo $GM8tna; ?></td><td><?php echo $R8tna; ?></td><td><?php echo $GM8tne; ?></td><td><?php echo $R8tne; ?></td>
</tr><tr>
 <td><?php echo "9"; ?></td><td><?php echo $GM9tna; ?></td><td><?php echo $R9tna; ?></td><td><?php echo $GM9tne; ?></td><td><?php echo $R9tne; ?></td>
</tr><tr>
 <td><?php echo "10"; ?></td><td><?php echo $GM10tna; ?></td><td><?php echo $R10tna; ?></td><td><?php echo $GM10tne; ?></td><td><?php echo $R10tne; ?></td>
</tr><tr>
 <td><?php echo "11"; ?></td><td><?php echo $GM11tna; ?></td><td><?php echo $R11tna; ?></td><td><?php echo $GM11tne; ?></td><td><?php echo $R11tne; ?></td>
</tr><tr>
 <td><?php echo "12"; ?></td><td><?php echo $GM12tna; ?></td><td><?php echo $R12tna; ?></td><td><?php echo $GM12tne; ?></td><td><?php echo $R12tne; ?></td>
</tr>
</tbody>
</table>
<p class="parrafosMinor">Datos actualizados seg&uacute;n referencias del Banco Central sujetos a cambios.</p>
</div>
<foot><div class="boxFoot"><p class="copyright">Banco del Sud de la Rep&uacute;blica Argentina - Copyright &copy;"
<?php echo date("Y");?></p></div></foot>
</body>
</html>