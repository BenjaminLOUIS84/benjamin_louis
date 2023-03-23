<h1>Exercice 8</h1>

<p>
Ecrire un algorithme qui renvoie
la table de multiplication d’un nombre passé en paramètre sous la forme:
</p>

<h2>Résultat</h2>

<?php
//  1   Déclarer la variable $nombre
//      pour représenter la table de 8

$nombre = 8;

//  Pour afficher la Table de 8
echo "Table de $nombre:<br>";

//  2   Créer une boucle for pour repéter l'opération 
//      Tant que le chiffre se trouve entre 1 et 11
//  3   Déclarer la variable $result dans la boucle
//      pour choisir une opération, ici la multiplication

for($i=1; $i<11; $i++){
    $result = $i*$nombre;

//      Afficher les opérations dans la boucle

    echo "$i x $nombre = $result<br>";
}
?>
