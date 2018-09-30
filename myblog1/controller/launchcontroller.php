<?php

class LaunchController
{
	
	public function getNav()
	{
		$lbpost = new POSTLIB();
		return  $lbpost->displayTopBar();
	}
	
	public function getListBlog()
	{
		$lbpost = new POSTLIB();
		$dtmjs = "<div class='viewDivList'><p>".$lbpost->listBlogs()."</p></div>";
		return "<br>".$dtmjs."<br>";
	}
	
	public function getViewBlog()
	{
		$mjs = "<h3>Bienvenido</h3>";
		$mjs .= "Puedes leer mis Posteos acerca del mundo de PHP y MySQL.<br>";
		$mjs .= "Muchas Gracias por participar en mi Blog.";
		$mjs .= "Saludos!!!";

		$lbpost = new POSTLIB();
		$mjs .= "<p></p>";		
		if(isset($_GET['blog']))
		{
			if($_GET['blog']=="")
			{
				$dtmjs = "<div class='viewDivBlog'><p>".$mjs."</p></div>";
				return "<br>".$dtmjs."<br>";				
			}
			else
			{
				$m = $lbpost->printBlog($_GET['blog']);
				$dtmjs = "<div class='viewDivBlog'><p>".$m."</p></div>";
				return "<br>".$dtmjs."<br>";
			}
		}
		else
		{
			$dtmjs = "<div class='viewDivBlog'><p>".$mjs."</p></div>";
			return "<br>".$dtmjs."<br>";
		}
	}
	
	public function getHeader()
	{
		$lbpost = new POSTLIB();
		return "<h2>¡¡¡Bienvenidos!!!</h2><br><h4>".$lbpost->BLOG_NAME."</h4>";
	}
	
	public function getFooter()
	{
		$lbpost = new POSTLIB();
		return "<div class='viewFBlog'>Copyright &copy; Job Systems Solutions 2014, ".$lbpost->BLOG_NAME."</div>";
	}
}
?>