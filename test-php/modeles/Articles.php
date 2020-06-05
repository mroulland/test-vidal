<?php

include_once('modeles/Article.php');

class Articles
{

	public $articles = [];
	public $quantity = 5;


	public function __construct($file)
	{
		$data = file_get_contents($file);
		$articles = json_decode($data);
		$this->articles = $articles->results;
	}

	/**
	 * @param int $startQuantity
	 * @return array
	 */
	public function getListArticles($startQuantity = 0)
	{
		$i = 0;
		$articlesList = [];
		$totalQuantity = $startQuantity+$this->quantity;
		foreach($this->articles as $article){
			if($i >= $startQuantity && $i < $totalQuantity){
				$articleData    = new Article($article);
				$articlesList[] = $articleData->getArrayData();
			}
			if($i > $startQuantity+$this->quantity) break;
			$i++;
		}
		return $articlesList;
	}


}