<!-- Librerias de la aplicacion -->
<?php 
	require_once 'Access.php';
	$vv=new Access();
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-5">
<title>Bienvenido - Data Security Software</title>
<link href="views/css/styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<!-- Encabezado -->
<header><div><h3>Regular Credenciales</h3></div></header>
<nav></nav>
<!-- Cuerpo principal de la aplicacion -->
<article><section>
<div id="sectionBody">
<?php 
	echo $vv->accessAction();  
?>
</div>
</section></article>
<!-- Pie -->
<footer><div><p>Data Security Software - Copyright 2013 - Job Systems Solutions</p></div></footer>
</body>
</html>
