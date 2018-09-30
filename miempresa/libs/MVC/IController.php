<?php

interface IController
{
	public function indexAction();
	
	public function getTitle();
		
	public function getHeader();

	public function getNav();
	
	public function getArticle();
	
	public function getFooter();

	public function getAdd($datas);
	
	public function getDelete($datas);
	
	public function getEdit($datas);
}
?>