<?php

function crade($chaine)
{
    return intval($chaine);
}

$handle = fopen('liste courses.txt', 'r');

/*
 * Comment lire la ligne du dessous :
 * On crée une boucle while (....).
 *     Ensuite, on fait d'abord ce qu'il y a entre parenthese:
 * on affecte une ligne du fichier à la variable $chaine.
 *     On execute le contenu de la chaine sauf si la chaine vaut FALSE
 * (arrive lorsqu'on arrive a la fin du fichier
 */
$nb_ligne = 0;
$nb_articles = 0;
while (($chaine = fgets($handle)) !== FALSE) {
    echo $chaine;
    $nb_ligne++;  //équivalent à $nb_ligne = $nb_ligne+1 ou à $nb_ligne +=1
    $nb_articles = $nb_articles + crade($chaine);
}
echo PHP_EOL;//insere un retour à la ligne
echo 'le fichier contient '.$nb_ligne.' lignes'.PHP_EOL;
echo 'Il y a '.$nb_articles.' articles à acheter';