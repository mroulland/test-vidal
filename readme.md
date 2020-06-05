Les énoncés suivants présentes le fonctionnement de base requis, libre au développeur d'enrichir le résultat de chaque exercice

Exercice PHP/HTML/CSS/JS
===

Présentation
---

L'objectif de ce test est de "mocker" une page de listing d'actualité VIDAL.

Le fichier `news.json` contient le résultat d'un webservice listant les 25 dernières actualités de la rubrique COVID-19 du site vidal.fr. 

De base, cette page devra présenter une liste des 5 premières actualités avec pour chaque entrée, une mise en page équivalente à `samples/News.png` dont : 
 * L'image de l'actu
 * Le titre
 * L'intro (champs summary_news)
 * La date de publication
 
Une pagination est attendue avec ici deux options (au choix) :
 * Simple : Une pagination en navigation synchrone avec deux boutons "précédent" & "suivant" et quand on clique sur ces boutons on change de page
 * Avancée : Une pagination en navigation asynchrone avec en fin de liste un bouton "charger plus" et au clique sur ce bouton, on chargera de manière asychrône les actualités de la page suivante (jusqu'à la dernière page)

 
 Contraintes
---
Le fichier `news.json` devra être interprété en PHP (avec ou sans framework), la mise en page est attendue en HTML/CSS (responsive ou non)
 


Exercice JS
===

Présentation
---
Ce deuxième exercice n'a aucun lien avec la liste des actualités. L'objectif est d'écrire une fonction en javascript permettant d'identifier le mot le plus long d'une chaine de caractère et de le renvoyer.
```
/**
 * Fonction permettant d'identifier et de renvoyer le premier mot le plus long d'une chaine de caractère
 * @param pString
 * @return string
 */
function longestWord(pString){

}
```


Exemple
---
 * La fonction avec la chaine `Hello world javascript` en paramètre renvoie `javascript`
 * La fonction avec la chaine `un deux trois quatre cinq six` en paramètre renvoie `quatre`
 * La fonction avec la chaine `pierre feuille ciseaux` en paramètre renvoie `feuille`