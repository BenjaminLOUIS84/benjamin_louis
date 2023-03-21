<h1>Exercice 3</h1>

<p>Soit la phrase "Notre formation DL commence aujourd'hui".<br>
    Ecrire un algorithme permettant de
    remplacer le mot "aujourd'hui" par "demain".
</p>

<h2>Résultat</h2>

<?php
//  1   Déclarer la variable $phrase
//  2   Déclarer la variable $str à modifier
//  3   Déclarer le mot à remplacer $w1
//  4   Déclarer le mot utilisé pour le remplacement $w2

$phrase = "Notre formation DL commence aujourd'hui.<br>";
$str = "Notre formation DL commence aujourd'hui.";
$w1 = "aujourd'hui";
$w2 = "demain";

//  5   Utiliser la fonction str_replace 
//      et instancier dans l'ordre les 3 variables déclarées précedement

$str = str_replace($w1, $w2, $str);

//      Pour afficher l'ancienne $phrase et la nouvelle phrase $str
//      La fonction print sert aussi à afficher le résultat

print $phrase;
print $str;
?>

