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

//      CREER UNE FONCTION PERSONNALISEE
// Déclarer le Tableau ( => pour associer)

$users = [
    "Mickaël" => "FR",
    "Virgile" => "ES",
    "Marie-Claire" =>"EN"
];

//  Pour trier le tableau par ordre alphabétique des prénoms
//  (asort opère sur $value)
//  (ksort opère sur $key)

ksort($users);

//  Pour vérifier ce que contient le tableau

//          var_dump ($tableau);

//  Créer la fonction personnalisée et utiliser switch case break
//  Si la variable de $langue correspond à FR alors dire Salut

function direBonjour($langue, $prenom){
switch($langue){
    case "FR": echo "Salut ".$prenom."<br>";
        break;
    case "ES": echo "Hola ".$prenom."<br>";
        break;
    case "EN": echo "Hello ".$prenom."<br>";
        break;
    default: echo "La langue n'est pas supportée";
        break;
}
}

//  Faire appel à la fonction
//  Utiliser la fonction foreach
//  pour attribuer la valeur texte des messages (salut-hola-hello) à une autre variable $value
//  et les destinataires (Mickaël-Virgile-Marie-Claire) à $key


foreach($users as $key =>$value){
    direBonjour($value,$key);
}

?>