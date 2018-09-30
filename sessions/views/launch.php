<?php 

    session_start();

    require_once 'controllers/routerscontroller.php';
    require_once 'controllers/sessionscontroller.php';

    // Control de las sesiones.
    if(!isset($_SESSION['sess_user']))
    {
        if(isset($_POST['txtUser']) && isset($_POST['txtPass']))
        {
            if(trim($_POST['txtUser']) != '' && trim($_POST['txtPass']) != '')
            {
                $_SESSION['sess_user'] = SessionsController::getStartLogon(
                        trim($_POST['txtUser']), trim($_POST['txtPass'])
                );
                $_POST['txtUser'] = '';
                $_POST['txtPass'] = '';
            }        
        }        
    }

    // Utilizado para almacenar nuevos contactos.
    if(isset($_POST['txtUserRegister']) && isset($_POST['txtPasswordRegister1'])
      && isset($_POST['txtSecretoRegister']))
    {
        if(trim($_POST['txtUserRegister']) != '' && trim($_POST['txtPasswordRegister1']) != ''
            && trim($_POST['txtSecretoRegister']) != '')
        {
            SessionsController::addNewUser(
                trim($_POST['txtUserRegister']), 
                trim($_POST['txtPasswordRegister1']), 
                trim($_POST['txtSecretoRegister'])
            );            
            $_POST['txtUserRegister'] = '';
            $_POST['txtPasswordRegister1'] = '';
            $_POST['txtSecretoRegister'] = '';
        }
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Polo Inform&aacute;tico</title>
	<meta name="JSS" content="Desarrollos"/>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php 
    #Header
    require 'header.ctp';
    
    #Nav
    require 'nav.ctp';

    #Body 
    if(!isset($_GET['nav']))
    {
        require RoutersController::homeAction();
    }
    else
    {
        if($_GET['nav'] == 'home')
        {            
            if(!isset($_SESSION['sess_user']))
            {            
                require RoutersController::homeAction();
            }
            else
            {
                if($_SESSION['sess_user'] != '')
                {
                    require RoutersController::homeAction();
                }
                else
                {
                    require RoutersController::errorLogonAction();
                }
            }
        }
        
        if($_GET['nav'] == 'logon')
        {
            require RoutersController::logonAction();
        }
        
        if($_GET['nav'] == 'logonclose') 
        {
            unset($_SESSION['sess_user']);
            header('Location: index.php');
        }
        
        if($_GET['nav'] == 'rescue')
        {
            require RoutersController::rescueAction();
        }   
        
        if($_GET['nav'] == 'registered')
        {
            require RoutersController::registeredAction();
        }        
        
        if($_GET['nav'] == 'about')
        {
            require RoutersController::aboutAction();
        }
    }
    
    #Footer
    require 'footer.ctp';
?>
    <!-- Scripts -->
    <script src="js/1.10.1/jquery-1.10.1.js" type="application/javascript"></script>
    <script src="js/validar.js" type="application/javascript"></script>
</body>
</html>