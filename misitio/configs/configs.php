<?php 

############################################################
##### Constantes del Proyecto ###################################
############################################################

#Nombre de Sitio Web. 
$site_web = 'www/misitio';

define('SITE',  '/' . $site_web); 

# Carpeta Root raíz principal.
define('SITE_PATH', dirname(__DIR__));

# Carpeta Controllador
define('CONTROLLERS', SITE_PATH.'/controllers');

# Carpeta Librerías
define('LIBS', SITE_PATH.'/libs');

# Carpeta Models
define('MODELS', SITE_PATH.'/models');

# Carpeta Plugins.
define('PLUGINS', SITE_PATH.'/plugins');

# Carpeta Views
define('VIEWS', SITE_PATH.'/views');

# Carpeta Webroot
define('WEBROOT', SITE_PATH.'/webroot');

############################################################
?>