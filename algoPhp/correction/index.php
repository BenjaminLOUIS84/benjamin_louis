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
Créditer le compte de X euros<br>
Débiter le compte de X euros<br>
Effectuer un virement d'un compte à l'autre.<br>
<br>
On doit pouvoir :<br>
Afficher toutes les informations d'un(e) titulaire (dont l'âge) et l'ensemble des comptes appartenant à celui(celle)-ci.<br>
Afficher toutes les informations d'un compte bancaire, notamment le nom / prénom du titulaire du compte.<br>
</p>


<?php

// importer les 2 classes

// instancier au moins 2 titulaires
// instancier au moins 2 comptes par titulaire

//utiliser les méthodes des 2 classes


?>
<div  style="display: flex; flex-direction: row; justify-content: flex-start; align-items: center; text-align: left; gap: 20px; font-size:0.7em;">
    <div  style="display: flex; flex-direction: column; justify-content: left; align-items: left; text-align: left;">

        <?php
        echo "<br>";
        echo $compte1;
        echo "<br>";
        echo $compte2;
        ?>

    </div>
    <div  style="display: flex; flex-direction: column; justify-content: flex-start; align-items: left; text-align: left;">

        <?php
        echo $compte1->getLabel();
        echo "<br>";
        echo "*********************************";
        echo "<br>";
        echo "Titualire: " . $compte1->getInfos();
        echo "<br>";
        echo "Solde: " . $compte1->getSolde() . " euros"; 
        ?>

    </div>
    <div  style="display: flex; flex-direction: column; justify-content: flex-start; align-items: left; text-align: left;">

        <?php
        // echo $compte2->getLabel();
        // echo "<br>";
        // echo "*********************************";
        // echo "<br>";
        // echo "Titulaire: " . $compte2->getInfos();
        // echo "<br>";
        // echo "Solde: " . $compte2->getSolde() . " euros";
        ?>

    </div>

</div>

<!-- ///////////////////////////////////////////////////////AFFICHER LES OPERATIONS/////////////////////////////////////////////////// -->

<h4>Opérations et Virements</h4>

        <?php
        echo $compte1->credit();
        echo $compte1->debit();
        echo $compte2->credit();
        echo $compte2->debit();
        echo $compte1->virement();
        echo $compte2->virement();
        ?>

<?php
echo "Fin";
?>

</body>

</html>




