<?php

# Carga e inicializaci�n de todas las librer�as.

require dirname(str_replace('', '', __DIR__)).'/'.PATH_LIBS.'/LocalZone/LocalZone.php';
require dirname(str_replace('', '', __DIR__)).'/'.PATH_LIBS.'/LocalZone/ILocalZone.php';
require dirname(str_replace('', '', __DIR__)).'/'.PATH_LIBS.'/PostLib/postlib.php';
require dirname(str_replace('\\', '/', __DIR__)).'/'.PATH_CONTROLLER.'/launchcontroller.php'; 
?>
