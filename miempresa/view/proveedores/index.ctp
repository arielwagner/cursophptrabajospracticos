<?php  
	use CoreBase\MVCCore;
	$css1 = MVCCore::scriptCSS('launch');
	$css2 = MVCCore::scriptCSS('menu');
	$header = MVCCore::layerView('proveedores', 'header');
	$nav = MVCCore::layerView('proveedores', 'nav');
	$body = MVCCore::layerView('proveedores', 'body');
	$footer = MVCCore::layerView('proveedores', 'footer');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>...:::Empresa:::...</title>
<?php 
	echo $css1; 
	echo $css2; 
?>
</head>
<body>
<header><?php echo $header; ?></header>
<nav><?php echo $nav; ?></nav>
<?php echo $body; ?>
<p>Esto es algo</p>
<footer><?php echo $footer; ?></footer>
</body>
</html>