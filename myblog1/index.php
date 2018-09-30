<?php

# Preparar el Root de la aplicacion.
define('ROOT_APP', str_replace('\\', '/', __DIR__));

# Ruta de Configuraciones generales.
require ROOT_APP.'/configs/configs.php';
# Cargar todas las librerías.
require ROOT_APP.'/configs/imports.libs.php';

# Abrir pagina principal.
require ROOT_APP.'/'.PATH_VIEW.'/'.FILE_LAUNCH;
?>