<?php require 'controllers/inmobiliariacontroller.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
	<title>My Home - Bienes y Raíces - Grupo Inmobiliario</title>
	<link href="css/styles.css" rel="stylesheet" type="text/css">

</head>

<body>
	<?php 
		# Encabezado.
		require 'header.ctp';

		# Navegador. 
		require 'nav.ctp';

		# Cuerpo. 
		if(!isset($_GET['nav']))
		{
			require InmobiliariaController::homeAction();
		}
		else
		{
			if($_GET['nav'] == 'home')
			{
				require InmobiliariaController::homeAction();
			}

			if($_GET['nav'] == 'galery')
			{
				require InmobiliariaController::galeryAction();
			}	

			if($_GET['nav'] == 'contact')
			{
				require InmobiliariaController::contactAction();
			}

			if($_GET['nav'] == 'about')
			{
				require InmobiliariaController::aboutAction();
			}			
		}
		# Pie.
		require 'footer.ctp';
	?>
</body>
</html>