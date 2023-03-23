<h1>Exercice 6</h1>

<p>Ecrire un algorithme permettant de calculer
    un montant de facture à régler à partir de
    la quantité d’articles, son prix hors taxe et
    un taux de TVA (exprimé en décimal. Ex: 20 % -> 0.2)
</p>

<h2>Résultat</h2>

<?php
//  1   Déclarer les variables

$prixUnit = 9.99;
$quantite = 5;
$txTva = 0.2;

//  2   Méthode pour calculer le montant de la facture
//      en tenant compte de la TVA
$prixHt = ($prixUnit*$quantite);
$tva = ($prixHt*$txTva);
$prixTtc = ($prixHt+$tva);

//  3   Aficher les données

echo "Prix unitaire de l'article: $prixUnit €<br>";
echo "Quantité: $quantite<br>";
echo "Taux de TVA: $txTva<br>";
echo "Le montant de la facture à régler est de: $prixTtc €<br>";
?>


