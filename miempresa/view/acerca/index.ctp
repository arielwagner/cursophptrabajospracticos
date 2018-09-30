<?php  
	use CoreBase\MVCCore;
	$css1 = MVCCore::scriptCSS('launch');
	$css2 = MVCCore::scriptCSS('menu');
	$header = MVCCore::layerView('acerca', 'header');
	$nav = MVCCore::layerView('acerca', 'nav');
	$body = MVCCore::layerView('acerca', 'body');
	$footer = MVCCore::layerView('acerca', 'footer');
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
<footer><?php echo $footer; ?></footer>
</body>
</html>