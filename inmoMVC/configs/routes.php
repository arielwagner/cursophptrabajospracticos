<?php
############################################################

# Cargar Controladores.
$direct = opendir("controllers"); 
while ($arch = readdir($direct))  {
    if ($arch == '.') { continue; }
    if ($arch == '..') { continue; }
    require SITE_PATH.'/controllers/'.$arch;
}

# Gestión de las rutas de control. 

# Página de inicio por defecto. 
if (!isset($_GET['call']))  {
    require SITE_PATH.'/views/_layouts/header.php';
    require SITE_PATH.'/views/_layouts/nav.php';
    // require cargar rutas o echo para cargar datos simples.
    require HomeController::indexAction(); 
    require SITE_PATH.'/views/_layouts/footer.php';  
}

# Páginas adicionales llamadas por GET. 
if (isset($_GET['call']))  { 
    if ($_GET['call'] == 'about') {
        require SITE_PATH.'/views/_layouts/header.php';
        require SITE_PATH.'/views/_layouts/nav.php';
        // require cargar rutas o echo para cargar datos simples.  
        require  AboutController::indexAction(); 
        require SITE_PATH.'/views/_layouts/footer.php';  
    }

    if ($_GET['call'] == 'contact') {
        require SITE_PATH.'/views/_layouts/header.php';
        require SITE_PATH.'/views/_layouts/nav.php';
        // require cargar rutas o echo para cargar datos simples.  
        require  ContactController::indexAction(); 
        require SITE_PATH.'/views/_layouts/footer.php';  
    } 

    if ($_GET['call'] == 'gallery') {
        require SITE_PATH.'/views/_layouts/header.php';
        require SITE_PATH.'/views/_layouts/nav.php';
        // require cargar rutas o echo para cargar datos simples.  
        require  GalleryController::indexAction(); 
        require SITE_PATH.'/views/_layouts/footer.php';  
    }         
}
############################################################
?>