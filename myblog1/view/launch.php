<?php 

$ctrl = new LaunchController();
$css_style = PATH_VIEW.'/'.PATH_CSS.'/styles.css';
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title>...:::Mi blog Personal - Bienvenidos:::...</title>
<link href="<?php echo $css_style; ?>" rel="stylesheet" type="text/css">
</head>
    <body>
    	<header>
		<?php echo $ctrl->getHeader(); ?>
		</header>
		<nav>
		<?php $ctrl->getNav();  ?>
		</nav>
		<article>
		<?php $ctrl->getListBlog();  ?>
		</article>
		<article>
		<?php echo $ctrl->getViewBlog();  ?>
		</article>
		<footer>
		<?php echo $ctrl->getFooter();  ?>
		</footer>
    </body>
</html>