<?php

/**
 * POSTLIB
 * Clase para la administración de entrada de datos en el Blog. 
 *
 * @author Wagner, Ariel Alejandro
 * @copyright Job Systems Solutions
 * @access public
 */
class POSTLIB {
	
	var $BLOG_NAME = "Mi Blog PHP y MySQL en Espa&ntilde;ol" ;
	var $DIRECTORY_LISTING = "blogs";
	
	/**
	 * POSTLIB::listBlogs()
	 * Esta función enumera todas las entradas que se hayan realizado durante el uso del Blog.
	 * 
	 * @param string $dir
	 * @return Retorna un valor para llamarse a si misma. 
	 * También en un uso externo entrega valores.
	 */
	function listBlogs($dir=''){
	    $files = scandir($this->DIRECTORY_LISTING."/$dir", 1);
	    foreach($files as $file){
	        if($file == "." || $file == ".." || $file == ".svn") { continue; }
	        if(is_dir($this->DIRECTORY_LISTING."/$file"))
	        {
	            if($dir != '') $recurse = "$dir/$file";
	            else $recurse = $file;
	            $this->listBlogs("$recurse");
	        }
	        else
	        {
	            list($month, $day, $year, $hour, $minute) =
	            sscanf($file, "%s %d %d %d %d");
	            print "<a href='index.php?blog=$dir/$file&title=$file".
	                  "'>$month $day, $year $hour:$minute</a><br>";
	        }
	    }
	}
	
	/**
	 * POSTLIB::printBlog()
	 * Esta función permite dar formato a la estampa de la entrada de blog, mostrado tiempo y fecha.
	 * 
	 * @param mixed $blog
	 * @return
	 */
	function printBlog($blog){
		$dir = $this->DIRECTORY_LISTING."/$blog";
		list($month, $day, $year, $hour, $minute) =
		sscanf($_GET['title'], "%s %d %d %d %d");
		$mj = "<h3>Entrada de blog $month $day, $year $hour:$minute</h3>";
		$fp = fopen($dir, 'r');
		$data = fread($fp, filesize($dir));
		fclose($fp);
		$mj .= $data."<br>";
		return $mj;		
	}
	
	/**
	 * POSTLIB::displayTopBar()
	 * Este método permite mostrar el comando principal del menú del Blog.
	 * 
	 * @return
	 */
	function displayTopBar(){	
	    if(!isset($_GET['blog']))
	    {
	        print("<a href=''>Inicio</a>");
	    }
	    else
	    {
	        print("<a href='index.php'>Inicio</a>");
	    }
	}
}
?>