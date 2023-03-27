<h1>Exercice 1</h1>

<p>
Créer une fonction personnalisée convertirMajRouge()
permettant de transformer une chaîne de caractères passé
en argument, en majuscule et en rouge
</p>

<h2>Résultat</h2>

<?php

    $texte = "Mon texte en paramètre";
    $maj = mb_strtoupper($texte);
    $color = '<span style="color: red;">'.$maj.'</span>';


//      Utiliser mb_strtoupper pour afficher en majuscule (accents compris)
//      CF   $maj
//      Pour changer la couleur du texte
//      (Intégrer le texte dans du html et du css)
//      CF   $color

//      DOIT EXISTER une fonction qui combine les 2 attributs
//      RECHERCHES EN COURS
//       
    function convertirMajRouge($texte) :string{
        
        $maj = mb_strtoupper($texte);
        return '<span style="color: red;">'.$maj.'</span>';
   }   
    echo convertirMajRouge($texte); 
    

?>
