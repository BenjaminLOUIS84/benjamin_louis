<h1>Exercice 6</h1>

<p>
Créer une fonction personnalisée
permettant de remplir une liste déroulante à partir d'un tableau de valeurs.
</p>

<h2>Résultat</h2>


<?php

//      Déclarer le tableau en prévoyant un espace
//      pour commencer la liste à partir de Monsieur

$elements = [" ","Monsieur","Madame","Mademoiselle"];

//      Ecrire la fonction de cette façon ci dessous

function afficherListeDeroulante($elements){
    echo "<select>";                            
                     // La balise select représente la liste déroulante

        foreach ($elements as $value) {
    
        echo "<label>$value</label>";       
        echo "<option value = $value</option>";
       } 
                     // Les balises label et option permettent d'afficher les éléments du tableau   
    echo "</select>";
}
    echo afficherListeDeroulante($elements);

 ?>