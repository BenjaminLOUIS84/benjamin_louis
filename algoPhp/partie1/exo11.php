<h1>Exercice 11</h1>

<p>
Initialiser un tableau de x marques de voitures.
Ecrire un algorithme permettant de parcourir ce tableau et d'en afficher le contenue
(une marque de voiture par ligne).
Il est également demandé d'afficher le nombre de marques
de voitures présentes dans le tableau.
</p>

<h2>Résultat</h2>

<?php

//  1   Déclarer les variables et afficher celles ci avec echo

$montantpaye = 152;
echo " Montant à payer : $montantpaye €<br>";

$montantverse = 200;
echo " Montant versé: $montantverse €<br>";

//  2   Formuler le calcul et afficher celui-ci

$restant = $montantverse-$montantpaye;
$billets10 = 0;
$pieces2 = 0;
$billets5 = 0;

echo " Reste à payer: $restant €<br>";

//  3   Pour faire une séparation
echo "**********************************<br>";

echo "Rendue de monaie: <br>";

// Pour répartir la monnaie 


while($restant>=10){
     $restant = $restant-10;
     $billets10 ++;}

if($restant >=5){
     $restant = $restant-5;
     $billets5 ++;}

while($restant>=2){
     $restant = $restant-2;
     $pieces2 ++;}
   

echo $billets10, " billets de 10€ -" ;  
echo $billets5, " billet de 5€ -" ;
echo $pieces2, " pièce de 2€ -" ;
echo $restant, " pièce de 1€ " ;

?>

