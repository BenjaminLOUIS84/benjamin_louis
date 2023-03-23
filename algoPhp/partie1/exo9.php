<h1>Exercice 9</h1>

<p>
Nous souhaitons savoir si une personne est imposable
en fonction de son âge et de son sexe.
Si la personne est une femme dont l’âge est compris
entre 18 et 35 ans ou si c’est un homme de plus de 20 ans,
alors celle-ci est imposable
(sinon ce n’est pas le cas, «non imposable»).
</p>

<h2>Résultat</h2>

<?php
//  1   Déclarer la variable $age
//      et l'afficher avec la fonction echo
   
$age = 32;
    echo " Age: $age<br>";

//  2   Déclarer la variable $sexe
//      et l'afficher avec la fonction echo

$sexe = "F";
    echo " Sexe: $sexe<br>";

//  3   Ajouter les conditions

if($age >= 18 && $age < 35){

    echo " La personne est Imposable.";
}
elseif($age > 20 ){
    echo " La personne est Imposable.";
}
else{
    echo " La personne est non Imposable.";
 }
?>
