<h1>Exercice 10</h1>

<p>
En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire 
complet qui contient les informations suivantes :
champs de texte avec nom, prénom, adresse email, ville, sexe
et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation : 
« Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».
Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement 
de validation (submit).  
</p>

<h2>Résultat</h2>


<?php
//      VARIABLES DE BASE POUR CREER UN FORMULAIRES
$sexes = [" ",
          "Masculin",
          "Feminin",
          "Transgenre"
];
$nomsInput = ["Nom",
              "Prénom",
              "Mail",
              "Ville"
];
$formations = ["Développeur Logiciel",
             "Designer Web",
             "Intégrateur",
             "Chef de projet"
];
//      FONCTION Choisir le sexe dans une liste déroulante

function afficherListeDeroulante($sexes){
    echo "<select>";                            
    foreach ($sexes as $value) {
        echo "<label>$value</label>";       
        echo "<option value = $value</option> ";
       } 
echo "</select>";
}
echo afficherListeDeroulante($sexes);

//      FONCTION Renseigner des informations personnelles en remplissant des champs

function afficherInput($nomsInput){
    echo "<form>";

        foreach ($nomsInput as $value) {
            echo"<br><label>".$value."</label>"."<br>";
            echo "<input><br>";
        } 
    echo "</form>";  
    }
    echo afficherInput($nomsInput);

//      FONCTION Choisir une ou plusieurs formations en cochant les cases

function genererCheckbox($formations){
    echo "<form>";                  
        foreach ($formations as $key => $value) {
            echo " <input type= checkbox>";
            echo " <label>$value</label>";
       } 
    echo "</form>";
}
    echo genererCheckbox($formations);
    
    echo "<input type= submit name= select value= Envoyer>";

?>