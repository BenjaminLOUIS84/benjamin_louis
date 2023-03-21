<h1>Exercice 5</h1>

<p>Ecrire un algorithme qui déclare une valeur en francs
    et qui la convertit en euros.
    Attention la valeur générée devra être arrondie à 2 décimales.
</p>

<h2>Résultat</h2>

<?php
//  1   Déclarer un nombre entier $entier
$entier = 100;

//  2   Convertir les francs en euros
$euro = money_format(euros);

//  3   Convertir un entier en décimal
$decimal = number_format ($entier, 2,",",".");
// echo $decimal;

//      Pour afficher le résultat
// echo "Montant en francs : $entier<br>";


?>

