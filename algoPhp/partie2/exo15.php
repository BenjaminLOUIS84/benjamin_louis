<h1>Exercice 15</h1>

<p>
En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php,
vérifier si une adresse e-mail a le bon format.<br>
L’adresse elan@elan-formation.fr est une adresse e-mail valide<br>
L’adresse contact@elan est une adresse e-mail invalide
</p>

<h2>Résultat</h2>


<?php

//   Déclarer le tableau contenant les adresses à vérifier

$adresses = ['elan@elan-formation.fr','contact@elan'];

//   Utiliser la fonction foreach pour conditionner les éléments du tableau pou un filtrage 
//   Pour exécuter le filtrage utiliser avec les fonctions filter_var et FILTER_VALIDATE_EMAIL
//   Après le filtrage la fonction ajoutera "pas" à "valide" si l'adresse n'est pas conforme

foreach ($adresses as $emails) {
    
    echo "<p>L'adresse $emails est une adresse e-mail<b>"
    .(filter_var($emails, FILTER_VALIDATE_EMAIL) ? '':' pas')
    ." valide.</b></p>"; 
}

?>


<?php
// $email = "elan@elan-formation.fr";

//     function checkEmail($email){
//     $find1 = strpos($email,"@");
//     $find2 = strpos($email,".");

//     return ($find1 !== false && $find2 !== false && $find2 > $find1);
// }
//  if (checkEmail($email)){
//     echo "L'adresse $email est une adresse e-mail valide";
//  }
// else{
//     echo "L'adresse $email est une adresse e-mail invalide";
// }
?>

<?php
// $email = "elan@elan-formation.fr";
// $email = filter_var($email,FILTER_SANITIZE_EMAIL);
// if(filter_var($email,FILTER_VALIDATE_EMAIL)){ 
//     echo ("L'adresse $email est une adresse e-mail valide");
//  }
// else{
//     echo ("L'adresse est une adresse e-mail invalide");
// }
?>

 <?php
// $email = array("Email");
// //      Ecrire la fonction de cette façon ci dessous
// function afficherInput($email){
//     echo "<form>";
//         foreach ($email as $value) {
//             echo"<label>".$value."</label>"."<br>";
//             echo "<input><br>";
//         } 
//     echo "</form>";  
//     }
//     echo afficherInput($email);
// var_dump(filter_var('elan@elan-formation.fr', FILTER_VALIDATE_EMAIL));
// var_dump(filter_var('contact@elan', FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED));
?>

<?php
// $emails = ["elan@elan-formation.fr","contact@elan"];
// $emails = explode(',', $email);
// $filtrerd_emails = array();

// foreach($emails as $email){
// if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
//     $error['Other'][] ="<div class= error>$email est invalide.</div>";
// }else{
//     $filtrerd_emails[] = $email;
// }
// }
?>