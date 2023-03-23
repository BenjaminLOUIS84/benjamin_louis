<h1>Exercice 5</h1>

<p>Ecrire un algorithme qui déclare une valeur en francs
    et qui la convertit en euros.
    Attention la valeur générée devra être arrondie à 2 décimales.
</p>

<h2>Résultat</h2>

<?php
// Déclarer un nombre entier
$somme = 100;

// Déclarer un nombre décimal
$devise = 6.55957;

//Convertir les francs en euros
$euro = ($somme/$devise);

//Convertir un entier en décimal
$resultat = number_format ($euro, 2,",",".");

// Afficher le résultat
echo "Montant en francs : $somme<br>";
echo "$somme francs = $resultat €";

?>

