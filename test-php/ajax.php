<?php
include_once('modeles/Articles.php');

define('SITE', "https://www.vidal.fr/");
define('HOME_ACTU', "actualites/");

$file = "includes/news.json";
$defaultQuantity = 5;

if(!empty($_POST) && isset($_POST["quantity"])){
	$articles = new Articles($file);
	$quantity = (!empty($_POST["quantity"])) ? $_POST["quantity"] : $defaultQuantity;
	$listArticles = $articles->getListArticles($quantity);

	// Mise en page :
	$content = "";

	foreach($listArticles as $article){
		$content .= '
		<a href="'.SITE.HOME_ACTU.$article['id']."/".$article['permalink'].'">
		<article>
			<img src="'. $article['image'].'" alt="'.$article['altImage'].'">
			<div class="details">
				<h2>'. $article['title'].'</h2>
				<p>'. $article['summary'].'</p>
				<span class="type">'. $article['type'].'</span><span class="date">'.$article['date'].'</span>
			</div>
		</article>
		</a>';
	}
	echo json_encode($content);
}

