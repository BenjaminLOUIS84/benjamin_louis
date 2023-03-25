<h1>Exercice 12</h1>

<p>
A partir d'une fonction personnalisée et à partir d'un tableau de prénoms
et de langue associée (tableau contenant clé et valeur), dire bonjour
aux différentes personnes dans leur langue respective
(français -> "Salut", anglais -> "Hello", espagnol -> "Hola")
EXEMPLE : tableau -> Mickaël -> FRA, Virgile -> ESP, Marie-Claire -> ANG
</p>

<h2>Résultat</h2>

<?php

//      TABLEAU ASSOCIATIF Pour associer un message à un nom
//  Etape 1 Déclarer le Tableau ( => pour associer)

$tableau = [
    "Salut"=>"Mickaël",
    "Hola"=>"Virgile",
    "Hello"=>"Marie-Claire"
];

//  Pour vérifier ce que contient le tableau

//          var_dump ($tableau);


//  Etape 2 Utiliser la fonction foreach
//  pour attribuer la valeur texte des messages (salut-hola-hello) à une autre variable $key
//  et les destinataires (Mickaël-Virgile-Marie-Claire) à $value

//  L'intérêt est de pouvoir adresser le message au destinataire
//  Afficher les éléments dans des balises <td> au sein d'une balise <tr>
//  Positionner les balises <td> verticalement pour créer un espace entre les 2 variables
//  Utiliser une balise <br> après la balise <tr> pour justifier les éléments


foreach($tableau as $key =>$value){

      echo 
        "<tr>
            <td>".($key)."</td>
            <td>".($value)."</td>
        </tr><br>";
}



//$my_array = $tableau;
//list($a,$b,$c)= $my_array;
//echo "<br> $a<br>  $b<br>  $c<br>";


?>