<?php

$courses = file_get_contents('liste courses.txt');
echo $courses.PHP_EOL;
$tableau_fichier = explode(PHP_EOL, $courses);
$nb_lignes  = count($tableau_fichier);
echo 'Le fichier contient '.$nb_lignes.' lignes';

// Marche aussi avec un
// echo 'Le fichier contient '.count(explode(PHP_EOL, $courses)).' lignes';