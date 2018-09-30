<?php

# Preparar el Root de la aplicacion.
define('ROOT_APP', str_replace('\\', '/', __DIR__));
# Ruta de Configuraciones generales.
require ROOT_APP.'/configs/configs.php';
# Abrir pagina principal.
require ROOT_APP.'/'.PATH_VIEWS.'/'.FILE_LAUNCH;
?>