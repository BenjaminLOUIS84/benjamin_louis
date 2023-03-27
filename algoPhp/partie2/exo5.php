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
<?php
//      Créer une fonction pour afficher le tableau
//      Pour intégrer du html dans du php matérialiser une zone avec  
//      

// function afficherInput($nomsInput){
// 
//     <form method= "post" action="">
//         <p>Nom<br><input type= "text name= "name">
//         <p>Prénom<br><input type="texte name="fname"></p>
//         <p>Ville<br><input type="texte name="city"></p> 
//     </form>
//       
// }
//    echo afficherInput($nomsInput);         
?>
