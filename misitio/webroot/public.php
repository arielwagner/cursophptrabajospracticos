<?php

    # Configuración del proyecto general.
    require '/configs/configs.php';

	# Configuración para juego de caracteres local.
	header('Content-Type: text/html; charset=iso-8859-1'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="iso-8859-1">
	<title>Gesti&oacute;n de Tu Escuela</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <?php $css = SITE.'/webroot/css/bootstrap.min.css';  ?>
    <link href="<?php echo $css; ?>" rel="stylesheet">
</head>
<body>
<?php require strtr(dirname(__DIR__), '\\', '/').'/configs/routes.php'; ?> 
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<?php $js1 = SITE.'/webroot/js/jquery/1.11.3/jquery.min.js'; ?>
<script src="<?php echo $js1; ?>"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<?php $js2 = SITE.'/webroot/js/bootstrap.min.js'; ?>
<script src="<?php echo $js2; ?>"></script>	
</body>
</html>