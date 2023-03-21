<h1>Exercice 1</h1>

<p>Soit la phrase "Notre formation DL commence aujourd'hui".<br>
    Ecrire un algorithme permettant de compter
    le nombre de caractères contenus dans cette phrase.
</p>

<h2>Résultat</h2>

<?php
//      Pour compter le nombre de lettre dans cette phrase
//  1   Déclarer la variable $phrase
//  2   Utiliser la fonction strlen

$phrase = "Notre formation DL commence aujourd'hui";
$longueur = strlen($phrase);

//      Voici 2 façons différentes pour afficher un même résultat
//  3   La fonction echo sert à afficher le résultat dans le navigateur

echo "La phrase $phrase contient $longueur caractères.<br>";
echo "La phrase $phrase contient " .strlen($phrase). " caractères.<br>";
?>
