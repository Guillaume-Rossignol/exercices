# Objectif

Ce premier exercice a pour but de découvrir la gestion des fichiers avec PHP. Ce premier
exercice va concerner exclusivement la lecture des fichiers. L'exercice sous symfony sera
plus complet.

On va vouloir avoir une liste de course, afficher le nombre total de ligne de la liste 
et le nombre complet d'articles à acheter. Chaque ligne du fichier sera de la forme `XX - nom de l'article`.

# Exercice
## Base :
Créer dans le dossier web un fichier `courses.php` et copier le fichier [liste courses.txt](./assets/liste courses.txt` dans le dossier web.

## Lecture de fichier
1. Faire en sorte que le fichier courses.php lise le contenu du fichier `liste des courses.txt` et affiche son contenu
    1. avec [file_get_contents](http://php.net/manual/fr/function.file-get-contents.php)
([correction](./correction/1_fgc.php))
    2. avec [fgets](http://php.net/manual/fr/function.fgets.php) ([correction](./correction/1_fgets.php)).

Globalement, la variante avec fgets est plus propre parce qu'on ne stocke pas le contenu
complet du fichier en mémoire.

2. Apres avoir affiché le contenu du fichier, afficher le nombre de ligne du fichier.
(avec un `file_get_contents` voir du coté de
[explode](http://php.net/manual/fr/function.explode.php),
[PHP_EOL](http://php.net/manual/fr/reserved.constants.php)
et [count](http://php.net/manual/fr/function.count.php).
L'idée etant d'éclater le fichier et d'en faire un tableau avec un élément du tableau par ligne, et de
 compter le nombre d'élément du tableau. [correction](./correction/2_fgc.php)
En partant du `fgets()̀  il suffit d'incrémenter une variable dans la boucle.[correction](./correction/2_fgets.php)

3. Créer une fonction qui a partir d'une chaine de la forme `XX - L'article` renvoit la valeur 'XX'. (Méthode la plus "pure" : [sscanf](http://php.net/manual/fr/function.sscanf.php),
méthode simple et propre : un explode et renvoyer le premier élément du tableau, 
méthode crade qui ne marche que parce que la chaine commence par le chiffre : [intval](http://php.net/manual/fr/function.intval.php))
[correction](./correction/3_functions.php)

4. Afficher en plus du nombre de lignes, le nombre d'articles.
(avec le fgets, utiliser la fonction créée au dessus dans la boucle pour incrémenter une variable)
(avec la méthode file_get_contents, on peut de maniere tres élégante faire un [array_map](http://php.net/manual/fr/function.array-map.php) sur le tableau
qu'on a créé avec la fonction qui renvoi le nombre d'article, puis faire un [array_sum](http://php.net/manual/fr/function.array-sum.php))
[correction avec le fgets](./correction/4_fgets.php) [correction avec le file_get_contents](./correction/4_fgc.php]

