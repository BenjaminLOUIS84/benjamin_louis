<h1>Exercice 7</h1>

<p>
Créer une fonction personnalisée
permettant de générer des cases à cocher.
On pourra préciser dans le tableau associatif si la case est cochée ou non.
</p>

<h2>Résultat</h2>


<?php

//      Déclarer le tableau associatif

$elements = ["Choix 1","Choix 2","Choix 3"];


//      Ecrire la fonction de cette façon ci dessous

function genererCheckbox($elements){
    echo "<form>";                  

        foreach ($elements as $key => $value) {

        echo "<input type= checkbox value= Yes checked>";
        echo "<label>$value</label><br>";
       
       } 

//      La balise input permet de matérialiser des cases à cocher
//      TYPE checkbox pour configurer la forme des cases carrée
//      VALUE permet de préciser si la case est cochée ou non
//      La balise label suivi de br permet d'afficher le texte verticalement

    echo "</form>";
}
    echo genererCheckbox($elements);

 ?>