<?php  
	use CoreBase\MVCCore;
	$css1 = MVCCore::scriptCSS('launch');
	$css2 = MVCCore::scriptCSS('menu');
	$header = MVCCore::layerView('launch', 'header');
	$nav = MVCCore::layerView('launch', 'nav');
	$body = MVCCore::layerView('launch', 'body');
	$footer = MVCCore::layerView('launch', 'footer');
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
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
<footer><?php echo $footer; ?></footer>
</body>
</html>