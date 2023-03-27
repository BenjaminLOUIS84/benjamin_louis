<h1>Exercice 5</h1>

<p>
Créer une fonction personnalisée
permettant de créer un formulaire de champs de texte
en précisant le nom des champs associés.
</p>

<h2>Résultat</h2>


<?php

//      Déclarer le tableau

$nomsInput = array("Nom","Prenom","Ville");

//      Ecrire la fonction de cette façon ci dessous

function afficherInput($nomsInput){
    echo "<form>";

        foreach ($nomsInput as $value) {
            echo"<label>".$value."</label>"."<br>";
            echo "<input><br>";
        } 
    echo "</form>";  
    }
    echo afficherInput($nomsInput);
?>

