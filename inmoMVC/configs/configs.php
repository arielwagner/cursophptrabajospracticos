<?php

############################################################
##### Constantes del Proyecto ###################################
############################################################

#Nombre de Sitio Web. 
$site_web = 'www/inmoMVC';

define('SITE',  '/' . $site_web); 

# Carpeta Root raíz principal.
define('SITE_PATH', strtr(dirname(__DIR__), '\\', '/'));

# Carpeta Webroot
define('WEBROOT', SITE.'/webroot');

############################################################
?>