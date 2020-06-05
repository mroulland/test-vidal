<?php

define('SITE', "https://www.vidal.fr/");
define('HOME_ACTU', "actualites/");

require("controller/ArticlesController.php");

$file = "includes/news.json";
new ArticlesController($file);
