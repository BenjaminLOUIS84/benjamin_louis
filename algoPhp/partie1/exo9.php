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
   
$age = 18;
    echo " Age: $age<br>";

//  2   Déclarer la variable $sexe
//      et l'afficher avec la fonction echo

$sexe = "M";
    echo " Sexe: $sexe<br>";

//  3   Ajouter les conditions
// il est possible de considérer plusieurs conditions en ajoutant un pipe ou un espère luètre || ou &&
if($age >= 18 && $age < 35 && $sexe = "F"){

    echo " La personne est Imposable.";
}
elseif($age > 20 && $sexe = "M"){
    echo " La personne est Imposable.";
}
else{
    echo " La personne est non Imposable.";
 }
?>
