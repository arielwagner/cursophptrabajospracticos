<?php

# Carga e inicialización de todas las librerías.

# Ruta principal de la aplicación.
$dir=dirname(str_replace('\\', '/', __DIR__));

# Librerías.

# Core
require $dir.'/'.PATH_CORE.'/MVCCore.php';

# Rutas
require $dir.'/'.PATH_ROUTE.'/routes.php';

# Model
// require $dir.'/'.PATH_MODEL.'/connection.php';
// require $dir.'/'.PATH_MODEL.'/squeries.php';
// require $dir.'/'.PATH_MODEL.'/dqueries.php';
// require $dir.'/'.PATH_MODEL.'/sessions.php';

# Libs
// require $dir.'/'.PATH_LIBS.'/LocalZone/LocalZone.php';
// require $dir.'/'.PATH_LIBS.'/LocalZone/ILocalZone.php';
// require $dir.'/'.PATH_LIBS.'/MVC/IController.php';
// require $dir.'/'.PATH_LIBS.'/MVC/Controller.php';
// require $dir.'/'.PATH_LIBS.'/MVC/Connection.php';
// require $dir.'/'.PATH_LIBS.'/MVC/DQuery.php';
// require $dir.'/'.PATH_LIBS.'/MVC/SQuery.php';

# Controller
require $dir.'/'.PATH_CONTROLLER.'/LaunchController.php';
require $dir.'/'.PATH_CONTROLLER.'/ClientesController.php';
require $dir.'/'.PATH_CONTROLLER.'/ProveedoresController.php';
// require $dir.'/'.PATH_VIEW.'/bodyviews.php';

# View
// require $dir.'/'.PATH_VIEW.'/launch.php';

# Layer
//define('CORE', $dir.'/'.PATH_VIEW);
?>