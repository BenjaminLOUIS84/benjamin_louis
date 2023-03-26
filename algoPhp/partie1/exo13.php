<h1>Exercice 13</h1>

<p>
Calculer la moyenne générale d'un élève
dont les notes sont renseignées dans un tableau (pas de coefificient).
Elle devra être affichée avec 2 décimales.
</p>

<h2>Résultat</h2>

<?php

//      CALCULER LA MOYENNE

//  1   Déclarer un tableau avec des notes

$notes = [10,12,8,19,3,16,11,13,9];

//  2   Déclarer le calcul de la somme des notes du tableau avec array_sum
//  3   Déclarer le nombre de notes avec count
//  4   Déclarer le calcul de la moyenne arrondi à 2 chiffres après la virgule avec round


$somNotes = array_sum($notes);
$nbNotes = count($notes);
$moyenne = round($somNotes/$nbNotes, 2);




//  5   Afficher les notes  

echo "Les notes obtenues par l'élève sont : 
    $notes[0]
    $notes[1]
    $notes[2]
    $notes[3]
    $notes[4] 
    $notes[5]
    $notes[6]
    $notes[7]
    $notes[8]<br>";

//  6   Afficher la moyenne 
echo "Sa moyenne générale est donc de : $moyenne";

?>