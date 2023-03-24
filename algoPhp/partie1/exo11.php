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

//   Etape 1    Déclarer le tableau et les éléments texte contenu dans celui ci

$tableau = ["Peugeot","Renault","BMW","Mercedes"];

//   Etape 2    Pour compter le nombre d'éléments du tableau
//        Utiliser la fonction count()

       // $tailleTableau = count($tableau);

//   Etape 3    Pour afficher chaque ligne du tableau

     echo $tableau[0];
     echo $tableau[1];
     echo $tableau[2];
     echo $tableau[3];

//    Etape 4   Pour afficher le nombre d'éléments du tableau
//              CONCATENATION
//              Si on fait référence à la fonction de comptage une seul fois
//              Utiliser la concatenation qui se matérialise par un .
//              Permet d'ajouter des éléments à la suite, cela permet de simplifier le code

     echo "Ce tableau contient".count($tableau)." éléments<br>"; 

//        Si on fait référence à la fonction plusieurs fois
//        Délcarer la fonction de comptage (CF Etape 2)
//        Ecrire echo comme ci dessous:

//   echo "Ce tableau contient $tailleTableau élements<br>";
?>

