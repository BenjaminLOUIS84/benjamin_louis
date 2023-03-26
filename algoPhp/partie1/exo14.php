<h1>Exercice 14</h1>

<p>
Calculer l'âge exact d'une personne
à partir de sa date de naissance (en années, mois, jours).
</p>

<h2>Résultat</h2>

<?php

//  Déclarer les Variables pour la date courante et la date de naissance
//  Ecrire ce que celles ci représentent en jours, mois et années

$dateCouranteJ = 21;
$dateCouranteM = 5;
$dateCouranteA = 2018;

$dateNaissanceJ = 17;
$dateNaissanceM = 1;
$dateNaissanceA = 1985;

//  Déclarer le calcul 

$ageJours = $dateCouranteJ-$dateNaissanceJ;
$ageMois = $dateCouranteM-$dateNaissanceM;
$ageAnnees = $dateCouranteA-$dateNaissanceA;

//  Afficher le résulat

echo "Age de la personne: $ageAnnees ans $ageMois mois $ageJours jours";

?>