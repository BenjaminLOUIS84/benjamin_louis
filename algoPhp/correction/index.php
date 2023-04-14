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




