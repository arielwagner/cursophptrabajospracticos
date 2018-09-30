<?php

namespace CoreBase;

/**
 * Clase Core
 * Núcleo del Framework. Uso exclusivo para este Framework. 
 * Código base no nativo.
 * @author Ariel Alejandro Wagner
 */
class MVCCore
{
	function __construct()
	{
		# Ruta de Configuraciones generales.
		require './configs/configs.php';
	}
	
	private static $_SetGet;
	
	public static function set($arrKyVl)
	{
		self::$_SetGet = array($arrKyVl);
		return self::$_SetGet;
	}
	
	public static function get($variable)
	{
		$outVar="";
		foreach(self::$_SetGet as $ky => $vl)
		{
			if($vl==$variable)
			{
				$outVar=$vl;
			}
		}
		return $outVar;
	}
	
	public static function openLink($textLink, $classRoot, $action)
	{
		//$cdURL = "./".PATH_VIEW."/$classRoot/index.php?control=$classRoot&action=$action";
		$cdURL = "index.php?control=$classRoot&action=$action";
		$rt = "<a href='$cdURL'>".$textLink."</a>";
		return $rt;
	}
	
	/**
	 * Cargar archivo Layer para la Vista.
	 * @param unknown $file Solo el nombre del archivo y sin la extensión.
	 * @return string
	 */
	public static function layerView($viewFolder, $file, $charset='ISO-8859-1')
	{
		$linea = "";
		if(empty($file))
		{
			$linea =
			"<b style='color: red'>No se ha asignado el Layer.</b>";
		}
		else
		{
			$fp = fopen(ROOT_APP.'/'.PATH_VIEW.'/'.$viewFolder.'/_'.$file.'.ctp', "r");
			if(!$fp) { return "<b style='color: red'>El archivo CSS no se pudo cargar.</b>"; }
			while(!feof($fp)) {
				$linea .= fgets($fp);
			}
			fclose($fp);
		}
		return mb_convert_encoding($linea, 'UTF-8', $charset);
	}	

	/**
	 * Cargar archivo Script para CSS
	 * @param unknown $file Solo el nombre del archivo y sin la extensión.
	 * @return string
	 */
	public static function scriptCSS($file)
	{
		$linea = "";
		if(empty($file))
		{
			$linea =
			"<b style='color: red'>No se ha asignado el nombre del CSS.</b>";
		}
		else
		{
			$fp = fopen(ROOT_APP.'/'.PATH_VIEW.'/'.PATH_CSS.'/'.$file.'.css', "r");
			if(!$fp) { return "<b style='color: red'>El archivo CSS no se pudo cargar.</b>"; }
			while(!feof($fp)) {
				$linea .= fgets($fp);
			}
			fclose($fp);
		}
		return "<style type='text/css'>".$linea."</style>";
	}
	
	/**
	 * Cargar archivo Script para JavaScript.
	 * @param unknown $file Solo el nombre del archivo y sin la extensión.
	 * @return string
	 */
	public static function scriptJS($file)
	{
		$linea = "";
		if(empty($file))
		{
			$linea =
			"<b style='color: red'>No se ha asignado el nombre del JavaScript.</b>";
		}
		else
		{
			$fp = fopen(ROOT_APP.'/'.PATH_VIEW.'/'.PATH_JS.'/'.$file.'.js', "r");
			if(!$fp) { return "<b style='color: red'>El archivo JavaScript no se pudo cargar.</b>"; }
			while(!feof($fp)) {
				$linea .= fgets($fp);
			}
			fclose($fp);
		}
		return "<script>".$linea."</script>";
	}	
}
?>