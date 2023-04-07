<h1>Exercice 14</h1>

<p>
Créer une classe Voiture possèdant les propriétés suivantes: marques et modèle
ainsi qu'une class VoitureElec qui hérite (extends)
de la classe Voiture et qui a une propriété supplémentaire (autonomie).
Instancier une voiture "classique" et une voiture "électrique" ayant les caractéristiques suivantes:

Peugeot 408 : $v1 = new Voiture ("Peugeot","408");
BMW i3 : $ve1 = new VoitureElec ("BMW","i3",100);

Votre programme de test devra afficher les informations des 2 voitures de la façon suivante:
    echo $v1->getInfos()."<br>";
    echo $ve1->getInfos()."<br>";
</p>

<?php

    class Voiture {

        private string $brand;
        private int $serie;
        

        public function __construct($brand, $serie){
            $this->marque= $brand;
            $this->modele= $serie;
        }

        public function getInfos(){
            return "$this->marque ($this->modele)";
        }

    }

    $v1 = new Voiture("Peugeot","408");

        echo $v1-> getInfos()."<br>";
        echo "<br>";
?>

<h2>HERITAGE</h2>
<p>
Mécanisme pour créer une class à partir d'une classe existante
Cette nouvelle classe hérite de toute les propriétés de la classe éxistante
</p>

<?php
    // Définir la Class VoitureElec comme inhérente à la class Voiture

    class VoitureElec extends Voiture{

    //  Reprendre le même constructeur et modifier les propriétés

        public function __construct($brand){
            parent::__construct($brand, "i3");
            }

    // Créer une fonction ou méthode: fecth (va chercher)
    //  spécifique à cette nouvelle classe
    
        public function fetch(){
            echo"Modèle: {$this->marque}";
            echo"<br>"; 
            echo"Marque: {$this->modele}";
            echo"<br>";
            echo"Autonomie: 100Km";
        }
    }

    $ve1 = new VoitureElec("BMW");
    echo "<br>";

   // echo $ve1-> getInfos();
    echo "<br>";
    echo $ve1-> fetch();
?>