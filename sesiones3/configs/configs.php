<?php 

# Gestion de errores, excepciones y advertencias.
error_reporting(E_WARNING); 

# Configuraciones generales de carpetas principales.

# Archivo de lanzamiendo.
$config['file_index'] = 'index.php';
$config['file_launch'] = 'launch.php';

# Ruta de la aplicacion.
$config['path_app'] = dirname(str_replace('\\', '/', __DIR__));

# Configuraciones Bases de Datos.
/**
* Aca colocar el nombre del servidor o la URL. Ejemplos:
* Localhost, 127.0.0.1, http://www.misitio.com/
*/
$config['server_name'] = 'localhost'; 

/**
* Nombre de la base de datos
*/
$config['database_name'] = 'members'; 

/**
* Nombre de usuario de la base de datos.
*/
$config['user_name'] = 'root';

/**
* Contrasena del usuario.
*/
$config['password'] = '';

/**
* Numero de puerto. Por defecto es 3306
*/
$config['port'] = (int) 3306;

# Ruta de acceso a las hojas de estilo.
$config['path_css'] = 'css';

# Ruta de acceso a JavaScript y librerias.
$config['path_js'] = 'js';

# Ruta de acceso a las Imagenes
$config['path_images'] = 'images';

# Ruta de controladores.
$config['path_controllers'] = 'controller';

# Ruta de modelos.
$config['path_models'] = 'model';

# Ruta de vistas.
$config['path_views'] = 'view';

# Ruta de errores.
$config['path_errors'] = 'errors';

# Ruta de almacenamietos.
$config['path_stores'] = 'stores';

# Definiciones generales - Constantes de Configuracion.

# Constantes para Bases de Datos
define('SERVERNAME', $config['server_name']);
define('DATABASENAME', $config['database_name']);
define('USERNAME', $config['user_name']);
define('PASSWORD', $config['password']);
define('PORT', $config['port']);

# Ruta de la aplicacion.
define('PATH_APP', $config['path_app']);

# Constantes de Carpetas Complemetarias.
define('PATH_CSS', $config['path_css']);
define('PATH_JS', $config['path_js']);
define('PATH_IMAGES', $config['path_images']);
define('PATH_STORES', $config['path_stores']);

# Constantes de Carpetas de MVC
define('PATH_CONTROLLERS', $config['path_controllers']);
define('PATH_MODELS', $config['path_models']);
define('PATH_VIEWS', $config['path_views']);

# Constante de Estructura de Paginas de Errores
define('PATH_ERRORS', $config['path_errors']);

# Constante de Archivos Principales.
define('FILE_INDEX', $config['file_index']);
define('FILE_LAUNCH', $config['file_launch']);
?>