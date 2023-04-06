<h1>Exercice 13</h1>

<p>
Créer une classe Voiture possèdant les propriétés suivantes: marques, modèle, nbPortes et vitesseActuelle
ainsi que les méthodes demarrer(), accelerer() et stopper() en plus des accesseurs (get) et mutateurs (set) traditionnels. 
La vitesse initiale de chaque véhicule instancié est de 0.
Une méthode personnalisée pourra afficher toutes les informations d'un véhicule.
</p>

<?php

class Voiture {

private string $marque;
private string $modele;
private int $nbPortes;
private int $vitesseActuelle;
private int $extraSpeed;
private bool $isStart;
private int $isDrive;
private int $isFast;


public function __construct($marque, $modele, $nbPortes, $vitesseActuelle, $extraSpeed, $isFast = true, $isDrive = false, $isStart = false){
  
    $this->marque= $marque;
    $this->modele= $modele;
    $this->portes= $nbPortes;
    $this->vitesse= $vitesseActuelle;
    $this->extra= $extraSpeed;
    $this->isStart= $isStart;
    $this->isDrive= $isDrive;
    $this->isFast= $isFast;
}

public function demarrer(){
    if($this->isStart){
        echo "<p>Le véhicule" . $this->getNomComplet() . " démarre</p>";
    }else{
        $this->isStart= true;
        echo "<p>Le véhicule " . $this->getNomComplet() . " démarre</p>";
    }

}

public function stopper(){
    if($this->isStart){
        $this->isStart = false;
        echo "<p>Le véhicule" . $this->getNomComplet() . " est stoppé</p>";
    }else{
        $this->isStart = true;
        echo "<p>Le véhicule " . $this->getNomComplet() . " est stoppé</p>";
    }

}

public function speed(){
    if($this->isDrive){
        $this->isDrive = true;
        echo "<p>La vitesse du véhicule " . $this->getNomComplet() . " est de: " . $this->getVitesse() . "Km/h</p>"; 
    }else{
        $this->isDrive = false;
        echo "<p>La vitesse du véhicule " . $this->getNomComplet() . " est de: " . $this->getVitesse() . "Km/h</p>"; 
    }

}

public function accelerer(){
    if($this->isFast){
        $this->isFast = true;
        echo "<p>Le véhicule " . $this->getNomComplet() . " accélère de: " . $this->getExtra() . "Km/h</p>"; 
    }else{
        $this->isFast = false;
        echo "<p>Le véhicule " . $this->getNomComplet() . " veut accélèrer de: " .  $this->getExtra() . "</p>"; 
    }

}


public function getNomComplet(){
    return "$this->marque ($this->modele)";
}

 public function getPortes(){
    return $this->portes;
}

public function getVitesse(){
    return $this->vitesse;
}

public function isStart(){
    return $this->isStart;
}

public function isDrive(){
    return $this->isDrive;
}

public function isFast(){
    return $this->isFast;
}

public function getExtra(){
    return $this->extra;
}

}


$vehicule1 = new Voiture("Peugeot", "408", 5, 50, 50, true, true, true);
$vehicule2 = new Voiture("Citroen", "C4", 3, 0, 20, false, false, false);
?>

<div  style="display: flex; flex-direction: row; justify-content: flex-start; align-items: center; text-align: left; gap: 20px; font-size:0.7em;">
    <div  style="display: flex; flex-direction: column; justify-content: left; align-items: left; text-align: left;">

        <?php

        $vehicule1-> demarrer();
        $vehicule1-> accelerer();
        $vehicule2-> demarrer();
        $vehicule2-> stopper();
        $vehicule2-> accelerer();
        $vehicule1-> speed();
        $vehicule2-> speed();


        echo "<br>";

        ?>
    </div>

    <div  style="display: flex; flex-direction: column; justify-content: flex-start; align-items: left; text-align: left;">


        <?php
        echo "Infos véhicule 1";
        echo "<br>";
        echo "*********************************";
        echo "<br>";  
        echo "<p>Nom et modèle du véhicule: " . $vehicule1-> getNomComplet() . "</p>";
        echo "<p>Nombre de portes: " .$vehicule1-> getPortes() . "</p>";
        $vehicule1-> demarrer();
        echo "<p>Sa vitesse actuelle est de: " .$vehicule1-> getVitesse() . "Km/h</p>";


        ?>
    </div>

    <div  style="display: flex; flex-direction: column; justify-content: flex-start; align-items: left; text-align: left;">


        <?php
        echo "Infos véhicule 2";
        echo "<br>";
        echo "*********************************";
        echo "<br>";
        echo "<p>Nom et modèle du véhicule: " . $vehicule2-> getNomComplet() . "</p>";
        echo "<p>Nombre de portes: " .$vehicule2-> getPortes() . "</p>";
        $vehicule2-> stopper();
        echo "<p>Sa vitesse actuelle est de: " .$vehicule2-> getVitesse() . "Km/h</p>";


        ?>
    </div>
</div>