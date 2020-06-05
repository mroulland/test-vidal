<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Actualités</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Liste des actualités</h1>
    </header>
    <main>
        <section>
            <?php
            foreach ($listArticles as $article):?>
            <article>
                <a href="<?php echo SITE.HOME_ACTU.$article['id']."/".$article['permalink'];?>">
                    <img src="<?php echo $article['image'];?>" alt="<?php echo $article['altImage'];?>">
                    <div class="details">
                        <h2><?php echo $article['title'];?></h2>
                        <p><?php echo $article['summary'];?></p>
                        <span class="type"><?php echo $article['type'];?></span><span class="date"><?php echo $article['date'];?></span>
                    </div>
                </a>
            </article>
            <?php
            endforeach;?>
        </section>
        <p class="more"><a onclick="javascript:getMore();">Voir plus</a></p>
    </main>

    <footer>
        <script type="text/javascript" src="js/script.js"></script>
    </footer>
</body>
</html>