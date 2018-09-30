<?php 
############################################################

# Gestión de las rutas de control. 

# Página de inicio por defecto. 
if (!isset($_GET['route']))  {
    require VIEWS.'/_layouts/header.php';
    require VIEWS.'/_layouts/nav.php';
    require VIEWS.'/home/body.php';
    require VIEWS.'/_layouts/footer.php';  
}

# Páginas adicionales llamadas por GET. 
if (isset($_GET['route'])) { 
     if ($_GET['route'] == 'about') {
        require VIEWS.'/_layouts/header.php';
        require VIEWS.'/_layouts/nav.php';
        require VIEWS.'/about/body.php';
        require VIEWS.'/_layouts/footer.php'; 
    }
}
############################################################
?>