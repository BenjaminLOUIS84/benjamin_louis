<h1>Exercice 2</h1>

<p>Soit la phrase "Notre formation DL commence aujourd'hui".<br>
    Ecrire un algorithme permettant de compter
    le nombre de mots contenus dans cette phrase.
</p>

<h2>Résultat</h2>

<?php
//      Pour compter le nombre de mots dans une phrase
//  1   Déclarer la variable $phrase
//  2   Utiliser la fonction str_word_count

$phrase = "Notre formation DL commence aujourd'hui";
$longueur = str_word_count($phrase);

//      Voici 2 façons différentes pour afficher un même résultat
//  3   La fonction echo sert à afficher le résultat

echo "La phrase $phrase contient $longueur mots.<br>";
echo "La phrase $phrase contient " .str_word_count($phrase). " mots.<br>";
?>
