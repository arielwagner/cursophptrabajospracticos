<?php 

require dirname(str_replace('\\', '/', __DIR__)).'/'.PATH_CONTROLLERS.'/sessionscontroller.php';
$css_style = PATH_VIEWS.'/'.PATH_CSS.'/styles.css';

$ctrl=new SessionsController();

?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-5">
<title>Gesti&oacute;n de Sesiones de Usuarios</title>
<link href="<?php echo $css_style; ?>" rel="stylesheet" type="text/css">
</head>
<body>
<!-- Encabezado de pagina -->
<header><div id="headerFix"><?php echo $ctrl->indexAction(); ?></div></header>
<!-- Cuerpo de la pagina -->
<article><section>
<div id="bodyArticleFix">
<h2>Bienvenido a la Libreria Virtual</h2>
<h3>El Lenguaje PHP</h3>
<p>PHP es un lenguaje de programacion interpretado, disenado originalmente para la creacion de paginas web dinamicas. Es usado principalmente en interpretacion del lado del servidor (server-side scripting) pero actualmente puede ser utilizado desde una interfaz de linea de comandos o en la creacion de otros tipos de programas incluyendo aplicaciones con interfaz grafica usando las bibliotecas Qt o GTK+.</p>
<p></p>
<p>PHP es un acronimo recursivo que significa PHP Hypertext Pre-processor (inicialmente PHP Tools, o, Personal Home Page Tools). Fue creado originalmente por Rasmus Lerdorf en 1994; sin embargo la implementacion principal de PHP es producida ahora por The PHP Group y sirve como el estandar de facto para PHP al no haber una especificacion formal. Publicado bajo la PHP License, la Free Software Foundation considera esta licencia como software libre.</p>
<p></p>
<h3>Recursos Para Usuarios</h3>
<p>Si eres un usuario registrado, podras descargar el manual PHP que cita temas relacionados con las bases de datos MySQL. Aprenderas algunas tecnicas de desarrollo con el uso de base de datos. Esta orientado para usuarios novatos y avanzados.</p>
<p></p>
<p>Tambien podras consultar otros recursos acerca de PHP y algunas particularidades de este lenguaje popular, 
incluso un historial de su evolucion.</p>
<p></p>
<p>Solo para Registrados</p>
<!-- Permitir o no descarga de archivo -->
<?php if(!isset($_SESSION['statusSE']) && $_SESSION['statusSE']=='') { ?>
	<p>Descargar: Guia de PHP y MySQL</p>
<?php } else { ?>
	<p>Descargar: <a href="index.php?down=down1&amp;" class="links">Guia de PHP y MySQL</a></p>
<?php } ?>
<p></p>
</div>
</section></article>
<!-- Pie de la pagina -->
<footer><div id="footerFix"><p>Desarrollado por Job Systems Solutions Copyright &copy; 2014</p></div></footer>
</body>
</html>
