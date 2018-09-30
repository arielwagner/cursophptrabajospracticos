<?php
// Establecer zona horaria para Argentina.
date_default_timezone_set('America/Argentina/Buenos_Aires');
// Esta variable almacena una bienvenida.
// Luego se muestra en la etiqueta <title></title>
$welcome = "Bienvenidos Curso de PHP";
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $welcome; ?></title>
</head>
<body>
<?php
	$sdate=date("d/m/y");
	$stime=date("h:i a");
	echo "Fecha de hoy: ".$sdate." hora actual:". $stime;
	echo "</br>";
	echo "Este es un ejemplo muy sencillo que nos muestra como funciona PHP";
	echo "</br>";
	echo "Parte del c�digo de PHP est� embebido en HTML.";
	echo "</br>";
?>
<p>Es un </p><?php echo " trozo "; ?><p>de</p><? echo " PHP ";
?><p>embebido en HTML</p>
</body>
</html>



