<?php
########################################################################################
# Cargar la solicitud de la URI 
$urlGetter = $_SERVER['REQUEST_URI'];

########################################################################################

########################################################################################
# Requerimiento de librerías.
########################################################################################
if(!require 'controller/LaunchController.php')
{
	require 'controller/LaunchController.php';
}
if(!require 'controller/ClientesController.php')
{
	require 'controller/ClientesController.php';
}
if(!require 'controller/ProveedoresController.php')
{
	require 'controller/ProveedoresController.php';
}

if(!require 'controller/AcercaController.php')
{
	require 'controller/AcercaController.php';
}

use ControllerBase\LaunchController as launchCtrl;
use ControllerBase\ClientesController as clientesCtrl; 
use ControllerBase\ProveedoresController as proveedoresCtrl;
use ControllerBase\AcercaController as acercaCtrl;

########################################################################################

########################################################################################
# Configuración de las Rutas.
########################################################################################
$vecClss = array(
	'launch' => new launchCtrl(), 
	'clientes' => new clientesCtrl(),
	'proveedores' => new proveedoresCtrl(),
	'acerca' => new acercaCtrl()
);

// Autocarga para el inicio del software.
if (getFilterRequestURI(trim($urlGetter)) == '')
{
	getInstanceResolution(new launchCtrl(), 'index');
	break;
}

getRouteOpenRequestURI($urlGetter, $vecClss);

######################################################################################

######################################################################################
### CORE DE ROUTES ###################################################################
### NO MODIFICAR   ###################################################################
######################################################################################

function getRouteOpenRequestURI($urlGetter, $vectorClases ='', $arrUris='')
{
	$vector = split('[/]', $urlGetter);
	$hl = ""; $c = 1; $vh = array(10); $clssComplete=''; $actComplete='';
	foreach($vector as $vc)
	{
		if($c > 4)
		{
			$hl .= '/'.$vc;
			$vh[$c] = $vc;
		}
		$c++;
	}
	foreach($vectorClases as $vcKy => $vcVal)
	{
		if($vcKy == $vh[6])
		{
			getInstanceResolution(new $vcVal(), $vh[7], '');
			break;
		}
	}
}

function getFilterRequestURI($urlGetter)
{
	$vector = split('[/]', $urlGetter);
	$hl=""; $c = 1;
	foreach($vector as $vc)
	{
		if($c > 4)
		{
			$hl .= '/'.$vc;
		}
		$c++;
	}
	return $hl;
}

function getInstanceResolution($className, $action, $paramAction = '')
{
	$ctrl = $className;
	$ctrl->$action($paramAction);
}
#####################################################################################
$GLOBALS['GETTER_SETTER'];
?>