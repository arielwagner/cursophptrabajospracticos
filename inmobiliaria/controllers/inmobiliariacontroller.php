<?php 

class InmobiliariaController {
	

	public static function homeAction()
	{
		return 'home.ctp';
	}

	public static function galeryAction()
	{
		return 'galery.ctp';
	}	
	
	public static function contactAction()
	{
		return 'contact.ctp';
	}

	public static function aboutAction()
	{
		return 'about.ctp';
	}	

	public static function getListScaparate() 
	{
		$fileXML = simplexml_load_file("scaparate/scaparate.xml");
		$arr = array();
		foreach($fileXML->children() as $child) {
		  $add = array($child->titulo, $child->autor, $child->valor, $child->imagen);
		  array_push($arr, $add);
		}
		return $arr;
	}
}
?>