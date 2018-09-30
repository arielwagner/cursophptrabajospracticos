<?php 

class Publisheds {
	
	function __constructor() {
		self::__constructor();	
	}
	
	public function getUpdateBooks() {
		$fileXML = simplexml_load_file("news/upbooks.xml");
		$arr=array();
		foreach($fileXML->children() as $child) {
		  $add=array($child->titulo, $child->autor, $child->publicacion);
		  array_push($arr, $add);
		}
		return $arr;
	}
}
?>