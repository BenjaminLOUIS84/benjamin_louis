<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta charset="utf-8">  <link rel="stylesheet" href="style.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banque</title>
</head>

<body>
<h1>Exercice</h1>

<p>
Vous êtes chargé(e) de créer un projet orienté objet<br>
permettant de gérer des titulaires et leurs comptes bancaires respectifs.<br>
Un compte bancaire est composé des éléments suivants :<br>
<br>
Un libellé (compte courant, livret A, ...)<br>
Un solde initial<br>
Une devise monétaire<br>
Un titulaire unique<br>
<br>
Un titulaire comporte :<br>
Un nom<br>
Un prénom<br>
Une date de naissance<br>
Une ville<br>
L'ensemble de ses comptes bancaires.<br>
<br>
Sur un compte bancaire, on doit pouvoir :<br>
Créditer le compte de 50 euros<br>
Débiter le compte de 100 euros<br>
Effectuer un virement d'un compte à l'autre.<br>
<br>
On doit pouvoir :<br>
Afficher toutes les informations d'un(e) titulaire (dont l'âge) et l'ensemble des comptes appartenant à celui(celle)-ci.<br>
Afficher toutes les informations d'un compte bancaire, notamment le nom / prénom du titulaire du compte.<br>
</p>


<?php

include "Titulaire.php";// importer les 2 classes
include "CompteBancaire.php";

// instancier au moins 2 titulaires
$personne1 = new Titulaire("NEMAR", "Jean", "1980-02-19", "Colmar");
echo $personne1;
echo"<br>";
$personne2 = new Titulaire("MENTATION", "Ali", "1970-03-10", "Noves");
echo $personne2;
echo"<br>";

// instancier au moins 2 comptes par titulaire
$compte1 = new CompteBancaire("Compte Courant 1",200,50,"euros", $personne1);
$compte2 = new CompteBancaire("Compte Courant 2",100,50,"euros",$personne1);
$compte3 = new CompteBancaire("Compte Courant 3",200,50,"euros", $personne2);
$compte4 = new CompteBancaire("Compte courant 4",100,50,"euros",$personne2);

//utiliser les méthodes des 2 classes


?>
<div  style="display: flex; flex-direction: row; justify-content: flex-start; align-items: center; text-align: left; gap: 20px; font-size:0.7em;">
    <div  style="display: flex; flex-direction: column; justify-content: flex-start; align-items: left; text-align: left;">

        <?php
        echo $compte1->getLabel();
        echo "<br>";
        echo "*********************************";
        echo "<br>";
        //echo "Titualire: " . $compte1->getNom(). $compte1->getPrenom();
        echo "<br>";
        echo "Solde: " . $compte1->getSolde() . " euros";
        echo "<br>";
        echo "-------------------------------------------------";
        echo "<br>";
        echo $compte3->getLabel();
        echo "<br>";
        echo "*********************************";
        echo "<br>";
       // echo "Titualire: " . $compte3->getNom() . $compte3->getPrenom();
        echo "<br>";
        echo "Solde: " . $compte3->getSolde() . " euros";
        echo "<br>";
        echo "-------------------------------------------------"; 
        ?>

    </div>
    <div  style="display: flex; flex-direction: column; justify-content: flex-start; align-items: left; text-align: left;">

        <?php
        echo $compte2->getLabel();
        echo "<br>";
        echo "*********************************";
        echo "<br>";
       // echo "Titulaire: " . $compte2->getNom() . $compte2->getPrenom();
        echo "<br>";
        echo "Solde: " . $compte2->getSolde() . " euros";
        echo "<br>";
        echo "-------------------------------------------------";
        echo "<br>";
        echo $compte4->getLabel();
        echo "<br>";
        echo "*********************************";
        echo "<br>";
       // echo "Titualire: " . $compte4->getNom() . $compte4->getPrenom();
        echo "<br>";
        echo "Solde: " . $compte4->getSolde() . " euros";
        echo "<br>";
        echo "-------------------------------------------------";
        ?>

    </div>

</div>

<!-- ///////////////////////////////////////////////////////AFFICHER LES OPERATIONS/////////////////////////////////////////////////// -->

<h4>Opérations et Virements</h4>

        <?php
        echo $compte1->crediter(50);
        echo $compte2->debiter(100);
        echo $compte1->virement($compte2, 500);
        echo "<br>";
        echo "-------------------------------------------------";
//////////////////////////////////////////////////Afficher l'ensemble des comptes/////////////////////////////////////////
        echo $personne1->afficherComptes();
        echo "<br>";
        echo $personne2->afficherComptes();
        echo "<br>";

    ?>
</body>

</html>




