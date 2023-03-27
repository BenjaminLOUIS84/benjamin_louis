<h1>Exercice 2</h1>

<p>
Soit le tableau suivant :
$capitales = array 
("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");
Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays 
s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à 
une fonction personnalisée.
Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales);
</p>

<h2>Résultat</h2>

<?php
//      Déclarer un tableau associatif dans lequel il est question d'associer une clé à une valeur
//      La clé doit être unique mais il peut y avoir plusieurs valeurs

$capitales = array("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");

//      Utiliser la fonction afficherTableHTML pour matérialiser les bordures du tableau à l'aide du html
//      Utiliser la fonction foreach pour attribuer une clé à chaque pays et une valeur à chaque capitales
//      Concatener strtoupper à $key pour que les pays soit en majuscule

function afficherTableHTML($capitales){
    echo "<table border = 1><th>Pays</th><th>Capital</th>";
    foreach ($capitales as $key => $value) {
        echo"<tr><td>".strtoupper($key)."</td><td>".($value)."</td></tr>";
        
    }
    echo "</table>";
}
//      Pour que le tableau soit classé par ordre alphabétique

ksort($capitales);

//       Afficher le tableau grâce à la fonction

    echo afficherTableHTML($capitales);
?>
