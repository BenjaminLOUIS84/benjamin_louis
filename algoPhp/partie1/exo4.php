<h1>Exercice 4</h1>

<p>Ecrire un algorithme permettant de
    savoir si une phrase est palindrome.
    
</p>

<h2>Résultat</h2>

<?php
//       Déclarer la variable à tester $phrase  
$phrase = "Engage le jeu que je le gagne";

//      Pour tester une phrase ou un mot, il faut modifier la structure de ceux ci
//      afin de préparer la variable à la comparaison

//  1   METTRE TOUTE LA PHRASE EN MINUSCULE
//      Pour effectuer la conversion, créer une nouvelle variable $phraseMin
//      et utiliser la fonction ci dessous

$phraseMin = strtolower($phrase); // strtoupper($phrase); Pour tout mettre en MAJUSCULE

//      OPTION DE CONTROLE: echo $phraseMin; Pour vérfier si le résultat est conforme

//  2   ENLEVER LES ESPACES ENTRE LES MOTS
//      Pour enlever les espaces, créer une nouvelle variable $phraseSansEspaces
//      et utiliser la fonction ci dessous

$phraseSansEspaces = str_replace(" ", "", $phraseMin);

//  " "          Représente la cible à modifier (soit un espace)
//  ""           Représente la solution de remplacement (soit rien du tout)
//  $phraseMin   Représente la variable dans laquelle l'action se produit à savoir la variable précédente


//  3   INVERSER LA CHAINE DE CARACTERES
//      Pour inverser la chaîne de caractères, créer une dernière variable $phraseReverse
//      et utiliser la fonction suivante pour la variable précédente

$phraseReverse = strrev($phraseSansEspaces);

//  4   AJOUTER UNE CONDITION
//      Pour orchestrer la réponse suivant l'analyse précédente à savoir le résultat du test
//      Si la phrase après avoir été modifié, correspond alors la console affichera: La phrase est palindrome.
//      Dans le cas contraire, la console affichera: La phrase n'est pas palindrome.

if($phraseSansEspaces == $phraseReverse){
    echo "La phrase: $phrase est palindrome.";
}
else{
    echo "La phrase: $phrase n'est pas palindrome.";
}
?>
