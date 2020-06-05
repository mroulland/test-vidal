<?php


class Article
{
	private $id;
	private $title;
	private $summary;
	private $image;
	private $altImage;
	private $date;
	private $type;
	private $permalink;


	public function __construct($article)
	{
		$this->hydrate($article);
	}


	/**
	 * @param $article
	 */
	public function hydrate($article){
		$this->setId($article->id_news)
			 ->setTitle($article->title_news)
			 ->setSummary($article->summary_news)
			 ->setImage($article->images[0]->url_image)
			 ->setAltImage($article->images[0]->description_image)
			 ->setDate($article->publication_date_news)
			 ->setType($article->sources[0]->name_source)
			 ->setPermalink($article->permalink_news);
	}

	/**
	 * @param string $id
	 * @return Article
	 */
	public function setId($id)
	{
		$this->id = $id;
		return $this;
	}

	/**
	 * @param string $title
	 * @return Article
	 */
	public function setTitle($title)
	{
		$this->title = $title;
		return $this;
	}

	/**
	 * @param string $summary
	 * @return Article
	 */
	public function setSummary($summary)
	{
		$summary = strip_tags($summary);
		$summary = substr($summary,0,strpos($summary," ", 200)+1) . "...";
		$this->summary = $summary;
		return $this;
	}

	/**
	 * @param string $image
	 * @return Article
	 */
	public function setImage($image)
	{
		$this->image = $image;
		return $this;
	}

	/**
	 * @param string $altImage
	 * @return Article
	 */
	public function setAltImage($altImage)
	{
		$this->altImage = $altImage;
		return $this;
	}

	/**
	 * @param string $date
	 * @return Article
	 * @throws Exception
	 */
	public function setDate($date)
	{
		$date = new DateTime($date);
		$this->date = $date->format("d-m-y");
		return $this;
	}

	/**
	 * @param string $type
	 * @return Article
	 */
	public function setType($type)
	{
		$this->type = $type;
		return $this;
	}

	/**
	 * @param string $permalink
	 * @return Article
	 */
	public function setPermalink($permalink)
	{
		$this->permalink = $permalink;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @return string
	 */
	public function getTitle()
	{
		return $this->title;
	}

	/**
	 * @return string
	 */
	public function getSummary()
	{
		return $this->summary;
	}

	/**
	 * @return string
	 */
	public function getImage()
	{
		return $this->image;
	}

	/**
	 * @return string
	 */
	public function getAltImage()
	{
		return $this->altImage;
	}

	/**
	 * @return string
	 */
	public function getDate()
	{
		return $this->date;
	}

	/**
	 * @return string
	 */
	public function getType()
	{
		return $this->type;
	}

	/**
	 * @return string
	 */
	public function getPermalink()
	{
		return $this->permalink;
	}

	/**
	 * On génère un tableau de data à fournir au front
	 * @return array
	 */
	public function getArrayData(){
		$dataArticle = [
			"id"		=> $this->id,
			"title"		=> $this->title,
			"summary" 	=> $this->summary,
			"image"		=> $this->image,
			"altImage" 	=> $this->altImage,
			"date"		=> $this->date,
			"type"		=> $this->type,
			"permalink" => $this->permalink
		];
		return $dataArticle;
	}
}
