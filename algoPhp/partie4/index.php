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

<h2>Résultat de l'exercice</h2>

<?php
  //////////////////////////////////////////////////////Import all classes////////////////////////////////////////////////

  spl_autoload_register(function ($class_name){
  require 'classes/'. $class_name .'.php';
  });
      //////////////////////////////////////////////////////////////////////////////////// Instance directors 

    $director1 = new Director("LUCAS","George","Masculin","1944-05-14");
    $director2 = new Director("BURTON","Tim","Masculin","1958-08-25");
      
  //////////////////////////////////////////////////////////////////////////////////// Instance movies

    $movie1 = new Movie("STARWARS",1977,162,"L'histoire de Star Wars, se déroule dans une galaxie qui est le théâtre d'affrontements entre les Chevaliers Jedi et les Seigneurs Sith.<br>
    Les Jedis maîtrisent le Côté lumineux de la Force, pouvoir bénéfique et défensif, pour maintenir la paix dans la galaxie.<br>
    Les Sith utilisent le Côté obscur, pouvoir nuisible et destructeur, pour leurs usages personnels et pour dominer la galaxie.");

    $movie2 = new Movie("BATMAN",1989,133,"Enfant, le milliardaire Bruce Wayne voit ses parents assassinés par un voleur des rues, qui en voulait au collier de perles de sa mère.<br>
    L'orphelin jure de venger leur mort en se lançant dans une bataille à vie contre le crime organisé.<br>
    Pour cela, il crée un justicier masqué nommé Batman, et cache cette identité secrète derrière celle d'une image de playboy flambeur.");

  //////////////////////////////////////////////////////////////////////////////////// Instance actors

    $actor1 = new Actor("FORD","Harrison","Masculin","1942-07-13");
    $actor2 = new Actor("KEATON","Mickaël","Masculin","1951-09-05");
    $actor3 = new Actor("FISHER","Carrie","Feminin","1951-04-01");
    
  //////////////////////////////////////////////////////////////////////////////////// Instance movies's genders 
  
    $gender1 = new Gender("Science-fiction");
    $gender2 = new Gender("Action");
    $gender3 = new Gender("Aventure");

  //////////////////////////////////////////////////////////////////////////////////// Instance actor's roles in movies
   
    $role1 = new Role("Han Solo");
    $role2 = new Role("Batman");
    $role3 = new Role("Princess Leia");

  //////////////////////////////////////////////////////////////////////////////////// Instance movies's casting
  
    $casting1 = new Casting($movie1, $role1, $actor1);
    $casting2 = new Casting($movie2, $role2, $actor2);
    $casting3 = new Casting($movie1, $role3, $actor3);
 

  //////////////////////////////////////////////////////////////////////////////////// Display Directors's informations
  
    echo $director1->getInfos();
    echo "<br>";
    echo $director2->getInfos();
    echo "<br>";
   
?>
<!--//////////////////////////////////////////////////////////////////////////// Display Directors's informations of movies//////////////////////-->

  <div style="display: flex; flex-direction: row; justify-content: flex-start; align-items: center; text-align: left; gap: 20px; font-size:0.7em;">
    <div  style="display: flex; flex-direction: column; justify-content: flex-start; align-items: left; text-align: left;">
    <?php
      echo "<br>";
      echo $director1->getMoviesInfos();
      
      echo $movie1->getInfos();
      echo "<br>";
      echo $gender1->getInfos();
      echo "<br>";
      echo "*************************************************************************************************************";
    
    ?>
    </div>
    <div  style="display: flex; flex-direction: column; justify-content: flex-start; align-items: left; text-align: left;">
    <?php
      echo "<br>";
      echo $director2->getMoviesInfos();
      
      echo $movie2->getInfos();
      echo "<br>";
      echo $gender1->getInfos();
      echo "<br>";
      echo "*************************************************************************************************************";
    
    ?>
    </div>
  </div>

<?php
  //////////////////////////////////////////////////////////////////////////////////// Display Actors's informations
    echo "<br>";
    echo $actor1->getInfos();
    echo "<br>";
    echo $actor2->getInfos();
    echo "<br>";
    echo $actor3->getInfos();
    echo "<br>";
    
?>
  <div style="display: flex; flex-direction: row; justify-content: flex-start; align-items: center; text-align: left; gap: 20px; font-size:0.7em;">

    <?php 
  //////////////////////////////////////////////////////////////////////////////////// Display Actor's roles in movies

      echo "<br>";
      echo $actor1->getFirstname()." ".$actor1->getName(). " a joué dans les films suivant: <br>";
      echo "<br>";
      echo $movie1->getTitle()."<br>";
      echo "<br>";
      echo "***********************************************************************************************************";
      echo "<br>";
      echo $actor2->getFirstname()." ".$actor2->getName(). " a joué dans les films suivant: <br>";
      echo "<br>";
      echo $movie2->getTitle()."<br>";
      echo "<br>";
      echo "***********************************************************************************************************";
      echo "<br>";
      echo $actor3->getFirstname()." ".$actor3->getName(). " a joué dans les films suivant: <br>";
      echo "<br>";
      echo $movie1->getTitle()."<br>";
      echo "<br>";
      echo "***********************************************************************************************************";
    ?>
  </div>

<?php

      echo $casting1;
      echo "<br>";
      echo $casting2;
      echo "<br>";
      echo $casting3;
      echo "<br>";
      //
      echo "<br>";
     


?>

</body>


</html>