<?php

include_once('modeles/Articles.php');

class ArticlesController
{
	private $file;

	public function __construct($file)
	{
		$this->file = $file;
		self::index();
	}

	public function index(){
		$articles = new Articles($this->file);
		$listArticles = $articles->getListArticles();
		include "vues/listArticles.php";
	}

}