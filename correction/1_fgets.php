<?php
$handle = fopen('liste courses.txt', 'r');

/*
 * Comment lire la ligne du dessous :
 * On crée une boucle while (....).
 *     Ensuite, on fait d'abord ce qu'il y a entre parenthese:
 * on affecte une ligne du fichier à la variable $chaine.
 *     On execute le contenu de la chaine sauf si la chaine vaut FALSE
 * (arrive lorsqu'on arrive a la fin du fichier
 */
while (($chaine = fgets($handle)) !== FALSE) {
    echo $chaine;
}