<?php

function convert_with_sscanf($chaine)
{
    list($valeur) = sscanf($chaine, '%i - %s');
    return $valeur;
}

function convert_with_explode($chaine)
{
    $elements = explode('-', $chaine);
    return $elements[0];
}

function crade($chaine)
{
    return intval($chaine);
}

echo convert_with_explode('5 - articles').PHP_EOL;
echo convert_with_sscanf('18 - articles').PHP_EOL;
echo crade('22 - articles').PHP_EOL;