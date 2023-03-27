<h1>Exercice 4</h1>

<p>
A partir de l’exercice 2,
ajouter une colonne supplémentaire dans le tableau HTML qui contiendra 
le lien hypertexte de la page Wikipédia de la capitale
(le lien hypertexte devra s’ouvrir dans un nouvel onglet et 
le tableau sera trié par ordre alphabétique de la capitale).
On admet que l’URL de la page Wikipédia de la capitale adopte la forme :
https://fr.wikipedia.org/wiki/
Le tableau passé en argument sera le suivant :
$capitales = array ("France"=>"Paris","Allemagne"=>"Berlin",
"USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid");
</p>

<h2>Résultat</h2>
<?php

//  Déclarer le tableau

$capitales = ["France"=>"Paris",
            "Allemagne"=>"Berlin",
            "USA"=>"Washington",
            "Italie"=>"Rome",
            "Espagne"=>"Madrid"];

//  Dans la fonction déclarer l'Url à insérer dans le tableau

function afficherTableHTML($capitales){

    $url = "https://fr.wikipedia.org/wiki/";

//  MODIFIER LE TABLEAU
//  Ajouter une 3eme colone <th>Lien wiki</th>
//  Ajouter l'Url dans le tableau

    echo "<table border = 1><th>Pays</th><th>Capital</th><th>Lien wiki</th>";
    foreach ($capitales as $key => $value) {
        echo"<tr><td>".strtoupper($key)."</td><td>".($value)."</td><td>
        <a href='https://fr.wikipedia.org/wiki/".$value."'>Lien</a></td></tr>";
        
    } 
      echo "</table>";  
}
//  Pour que le tableau soit classé par ordre alphétique en se basant sur $value
asort($capitales);

    echo afficherTableHTML($capitales);
?>
