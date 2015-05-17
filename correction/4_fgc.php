<?php

function crade($chaine)
{
    return intval($chaine);
}


$courses = file_get_contents('liste courses.txt');
echo $courses.PHP_EOL;

$tableau_fichier = explode(PHP_EOL, $courses);
$nb_lignes  = count($tableau_fichier);

$tableau_quantite = array_map('crade', $tableau_fichier);
$nb_articles = array_sum($tableau_quantite);

echo 'Il y a '.$nb_articles.' articles à acheter';