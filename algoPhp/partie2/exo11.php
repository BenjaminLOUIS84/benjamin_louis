<h1>Exercice 11</h1>

<p>
Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres)
à partir d’une chaîne de caractère représentant une date.
Exemple :
formaterDateFr("2018-02-23");     
</p>

<h2>Résultat</h2>


<?php
$date = "2018-02-23";
    echo formaterDateFr($date);
// Définition de la fonction
function formaterDateFr($date){

// Utilisation intldateformatter  
$dateFr = new DateTime($date);  
$fonctionDateFormat = new IntlDateFormatter(
    "fr_FR",
    IntlDateFormatter::FULL,//ajoute le jour de la semaine
    IntlDateFormatter::NONE,//supprime les heure après
    'Europe/Paris', 
    IntlDateFormatter::GREGORIAN  ); 

//Mise en forme de la date 
    $fonctionDateFormat->setPattern('EEEE dd MMMM YYYY');  //ce pattern crée le format (jours date mois année)
    return $fonctionDateFormat->format($dateFr);
};
?>