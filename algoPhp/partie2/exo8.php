<h1>Exercice 8</h1>

<p>
</p>

<h2>Résultat</h2>


<?php

//      Déclarer le tableau associatif

$url = "http://my.mobirise.com/data/userpic/764.jpg";
$nbRepetition = 4;

//      Ecrire la fonction de cette façon ci dessous

function repeterImage($url,$nbRepetition){
                   
    $resultat = "";
        foreach (range(1,$nbRepetition) as $value) {
            $resultat .= $url;
       } 
    return $resultat;
}
echo repeterImage($url,$nbRepetition);
 ?>