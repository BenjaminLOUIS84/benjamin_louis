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

//   Etape 1    Déclarer le tableau et les éléments texte contenu dans celui ci METHODE 1

     $tableau = [" Peugeot "," Renault "," BMW "," Mercedes "];
     
//                                                                              METHODE 2
//   $tableau = array("Peugeot","Renault","BMW","Mercedes");

//    Etape 2   Pour compter le nombre d'éléments du tableau
//              Utiliser la fonction de comptage:  count()

//              $tailleTableau = count($tableau);

//    Etape 3   Pour afficher le nombre d'éléments du tableau
//              CONCATENATION
//              Si on fait référence à la fonction de comptage une seul fois
//              Utiliser la concatenation qui se matérialise par un .
//              Permet d'ajouter des éléments à la suite, cela permet de simplifier le code

     echo "<br>Il y a ".count($tableau)." marques de voitures dans ce tableau:<br>"; 

//             Si on fait référence à la fonction plusieurs fois
//             Délcarer la fonction de comptage (CF Etape 2)
//             Ecrire echo comme ci dessous:

//   echo "<br>Il y a " $tailleTableau " marques de voitures dans ce tableau:<br>";

//   Pour afficher les caractéristiques du tableau utiliser: var_dump()               ASTUCE

//   echo var_dump($tableau);

//   Etape 4    Pour afficher chaque ligne du tableau verticalement et avec une puce

//   Mettre le tableau dans une liste

     $my_array = $tableau;
     list($a,$b,$c,$d)= $my_array;

     echo "<br>o $a<br> o $b<br> o $c<br> o $d<br>";


?>

