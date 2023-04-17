<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta charset="utf-8">  <link rel="stylesheet" href="style.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCICE CINEMA</title>
</head>

<body>
<h1>Exercice CINEMA</h1>
<p>Vous avez en charge de gérer différentes entités autour de la thématique du cinéma.<br>
Les films seront caractérisés par leur titre, leur date de sortie en France, leur durée (en minutes)<br>
ainsi que leur réalisateur (unique, avec nom, prénom, sexe et date de naissance).<br>
Un résumé du film (synopsis) pourra éventuellement être renseigné.<br>
Chaque film est caractérisé par un seul genre cinématographique (science-fiction, aventure, action, ...).<br>
Votre application devra recenser également les acteurs de chacun des films.<br>
On désire connaître le nom, le prénom, le sexe et la date de naissance de l’acteur<br>
ainsi que le rôle (nom du personnage) joué par l’acteur dans le(s) film(s) concerné(s).<br>
Il serait intéressant d'utiliser la notion d'héritage entre classes dans cet exercice.<br>
A vous de le mettre en place correctement !<br>
Attention, le rôle (par exemple James Bond) ne doit être instancié qu'une seule fois<br>
(dans la mesure où ce rôle a été incarné par plusieurs acteurs.)<br>
On doit pouvoir :<br>
Lister la liste des acteurs ayant incarné un rôle précis<br>
(ex: les acteurs ayant joué le rôle de Batman : Michael Keaton, Val Kilmer, George Clooney, …)<br>
Lister le casting d'un film<br>
(dans le film Star Wars Episode IV, Han Solo a été incarné par Harrison Ford, Luke Skywalker a été incarné par Mark Hamill, ...)<br>
Lister les films par genre (exemple : le genre SF est associé à X films : Star Wars, Blade Runner, ...)<br>
Lister la filmographie d'un acteur (dans quels films a-t-il joué ?)<br>
Lister la filmographie d'un réalisateur (quels sont les films qu'a réalisé ce réalisateur ?)<br></p>

<?php

//////////////////////////////////////////////////////Import class////////////////////////////////////////////////

include "Movie.php";
include "Director.php";
//include "Star.php";

// instance movies

$movie1 = new Movie("STARWARS",1977,120,"Science-fiction","Résumé",$director1);

// instance directors

$director1 = new Director("George","LUCAS","Masculin",1944);

echo "<br>";
//echo $director1;
echo "<br>";

// instance stars

echo $director1->displayFilmography();
echo"<br>";

?>

</body>

</html>