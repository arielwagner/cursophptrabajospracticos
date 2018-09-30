<?php

$clienteSOAP='';
$resultado_suma='';
$resultado_resta='';
$errors='';
try{
	$clienteSOAP = new SoapClient('http://localhost:8080/www/wsdl/aritmetica.wsdl');
	$resultado_suma = $clienteSOAP->sumar(2.7, 3.5);
	$resultado_resta = $clienteSOAP->restar(2.7, 3.5);
} catch(SoapFault $e){
	$errors=$e;
}

?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-5">
<title>Web Service - Demostraci&oacute;n</title>
</head>
<body>
<header><h2>Demostraci&oacute;n de Web Service</h2></header>
<article><section>
<h3>Demostraciones Aritm&eacute;ticas</h3>
<?php if(trim($errors)=='') { ?>
<p>Obtenci&oacute;n de la suma:</p>
<p>2.7 + 3.5 = <?php echo $resultado_suma; ?></p>
<p></p>
<p>Obtenci&oacute;n de la resta:</p>
<p>2.7 + 3.5 = <?php echo $resultado_resta; ?></p>
<?php } else { ?>
<p>Se ha producido el siguiente error:</p>
<p><?php echo var_dump($errors); } ?></p>
</section></article>
<footer><p>Demostraciones Educativas - Desarrollado por Job Systems Solutions</p></footer>
</body>
</html>