<h1>Exercice 8</h1>

<p>
Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg
Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.
</p>

<h2>Résultat</h2>


<?php

//      Déclarer l'Url de l'image
//      Utiliser base64_encode pour encoder les données et restituer l'image
//      Utiliser file_get_contents pour récupérer les données brut de l'image

$url = 'http://my.mobirise.com/data/userpic/764.jpg';

$imageData = base64_encode(file_get_contents($url));

//echo '<img src = "data:image/jpeg;base64,'.$imageData.'">'; Pour afficher l'image

//Déclarer le nombre de répétitions
      
$nbRepetition = 4;

//      Ecrire la fonction de cette façon ci dessous

function repeterImage($imageData,$nbRepetition){
                   
    $resultat = "";
        foreach (range(1,$nbRepetition) as $value) {
            $resultat .='<img src = "data:image/jpeg;base64,'.$imageData.'">';
       } 
    return $resultat;
}
echo repeterImage($imageData,$nbRepetition);
 ?>