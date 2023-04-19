<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta charset="utf-8">  <link rel="stylesheet" href="style.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCICE LIVRE</title>
</head>

<body>
<h1>Exercice LIVRE</h1>
<p>Vous êtes chargé(e) de créer un projet orienté objet permettant de gérer des livres et leurs auteurs respectifs.<br>
Les livres sont caractérisés par un titre, un nombre de pages, une année de parution, un prix et un auteur.<br>
Un auteur comporte un nom et un prénom.Une méthode toString() sera appréciée dans chacune de vos classes.<br>
Vous implémenterez une méthode afficherBibliographie() qui permettra d’afficher la bibliographie complète d’un auteur :<br></p>
<h2>Les Livres de Stéphen King</h2>
<p> Ca (1986): 1138 pages/ 20€<br>
Simetierre (1983): 374 pages/ 15€<br>
Le Fléau (1978): 823 pages/ 14€<br>
Shining (1977): 447 pages/ 16€<br></p>


<?php

include "Auteur.php";// importer les 2 classes
include "Livre.php";

// instancier un auteur

$auteur1 = new Auteur("KING", "Stéphen");

echo"<br>";
echo $auteur1;
echo"<br>";

// instancier les livres de l'auteur

$livres1 = new Livre("Ca", 1986, 1138, 20, $auteur1);
$livres2 = new Livre("Simetierre", 1983, 374, 15, $auteur1);
$livres3 = new Livre("Le Fléau", 1978, 823, 14, $auteur1);
$livres4 = new Livre("Shining", 1977, 447, 16, $auteur1);


echo $auteur1->afficherBibliographie();
echo"<br>";

?>

</body>

</html>