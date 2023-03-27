<h1>Exercice 9</h1>

<p>
Créer une fonction personnalisée permettant d'afficher des boutons radio
avec un tableau de valeurs en paramètre ("Monsieur","Madame","Mademoiselle").
</p>

<h2>Résultat</h2>


<?php

//      Déclarer le tableau associatif

$nomsRadio = ["Monsieur","Madame","Mademoiselle"];


//      Ecrire la fonction de cette façon ci dessous

function afficherRadio($nomsRadio){
   
        echo "<form>";                  

        foreach ($nomsRadio as $key => $value) {

        echo "<input type= radio>";//   Ajouter value = rg1/rg2/rg3 pour effet switch
        echo "<label>$value</label><br>";  
       } 
     
//      La balise input permet de matérialiser des cases à cocher
//      TYPE radio pour configurer la forme des cases ronde
//      VALUE permet de préciser si la case est cochée ou non
//      La balise label suivi de br permet d'afficher le texte verticalement

    echo "</form>";
}
    echo afficherRadio($nomsRadio);

//          PROBLEME POUR REGLER LA SELECTION DES CASES
//         switch ($nomsRadio){
//             case "rg1": 
//                 echo "Monsieur".$nomsRadio."<br>";
//             break;
//             case "rg2": 
//                 echo "Madame".$nomsRadio."<br>";
//             break;
//             case "rg3": 
//                 echo "Mademoiselle".$nomsRadio."<br>";
//             break;
// }
 ?>