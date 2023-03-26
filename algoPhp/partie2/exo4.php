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
<a href="https://fr.wikipedia.org/wiki/" target="_blank">Lien</a>;

<h2>Résultat</h2>
<?php
$capitales = ["France"=>"Paris",
            "Allemagne"=>"Berlin",
            "USA"=>"Washington",
            "Italie"=>"Rome",
            "Espagne"=>"Madrid"];


function afficherTableHTML($capitales){
    echo "<Table border = 1><th>Pays</th><th>Capital</th><th>Lien wiki</th>";
    foreach ($capitales as $key => $value) {
        echo"<tr><td>".strtoupper($key)."</td><td>".($value)."</td></tr>";
        "</table>";
    }
}
asort($capitales);

    echo afficherTableHTML($capitales);
?>
