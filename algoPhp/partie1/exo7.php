<h1>Exercice 7</h1>

<p>
Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge:
Poussin: entre 6 et 7 ans
Pupille: entre 8 et 9 ans
Minime: entre 10 et 11 ans
Cadet: à partir de 12 ans
Si la catégorie n’est pas gérée, merci de le préciser.
</p>

<h2>Résultat</h2>

<?php
//  Déclarer la variable

$age = 12 ; 

//  Ajouter des Conditions afin d'attribuer
//un âge dans une catégorie

echo "L'enfant qui à $age ans oppartient à la catégorie:";

if($age >12){
    echo " Cadet." ;
}elseif($age >= 10 && $age < 12){
    echo " Minime.";
}
elseif($age >= 8 && $age < 9){
    echo " Pupille.";
}
elseif($age >= 6 && $age < 7){
    echo " Poussin.";
}
else{
   echo " Junior.";
}

?>
