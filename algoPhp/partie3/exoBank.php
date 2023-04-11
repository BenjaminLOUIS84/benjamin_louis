<h1>Exercice Banque</h1>

<p>
Vous êtes chargé(e) de créer un projet orienté objet<br>
permettant de gérer des titulaires et leurs comptes bancaires respectifs.<br>
Un compte bancaire est composé des éléments suivants :<br>
<br>
Un libellé (compte courant, livret A, ...)<br>
Un solde initial<br>
Une devise monétaire<br>
Un titulaire unique<br>
<br>
Un titulaire comporte :<br>
Un nom<br>
Un prénom<br>
Une date de naissance<br>
Une ville<br>
L'ensemble de ses comptes bancaires.<br>
<br>
Sur un compte bancaire, on doit pouvoir :<br>
Créditer le compte de X euros<br>
Débiter le compte de X euros<br>
Effectuer un virement d'un compte à l'autre.<br>
<br>
On doit pouvoir :<br>
Afficher toutes les informations d'un(e) titulaire (dont l'âge) et l'ensemble des comptes appartenant à celui(celle)-ci.<br>
Afficher toutes les informations d'un compte bancaire, notamment le nom / prénom du titulaire du compte.<br>
</p>

<h2>Résultat</h2>


<?php

class Titulaire {

    private string $nom;
    private string $prenom;
    private DateTime $date;
    private string $ville;
    private string $Compte;

    public function __construct($nom, $prenom, $date, $ville, $compte){
        $this->nom = $nom;  
        $this->prenom = $prenom;
        $this->date = new DateTime($date);
        $this->ville = $ville;
        $this->compte = $compte;
    }

    public function calculerAge(){
        $now = new DateTime();
        $dateNaissance = $this->date;
    
        $difference = date_diff($dateNaissance, $now);
        return $difference->y;

    }

    public function __toString(){
        return $this->nom." ".$this->prenom." a ".$this->calculerAge()." ans et habite à " 
        .$this->ville." et dispose d'un ".$this->compte."<br>";
    }


}

$personne1 = new Titulaire("NEMAR", "Jean", "1980-02-19", "Colmar","Compte Courant");
echo $personne1;
echo"<br>";

class Compte {

    private string $label;
    private int $soldeInit;
    private string $devise;
    private string $titulaire;
    // private bool $crediter;
    // private bool $debiter;
    //private bool $virer
    

    public function __construct($label, $soldeInit, $devise, $titulaire, 
        //$crediter=false, $debiter= false, $virer=false
        ){
        $this->label = $label;
        $this->soldeInit = $soldeInit;
        $this->devise = $devise;
        $this->titulaire = $titulaire;
        // $this->crediter = $crediter;
        // $this->debiter = $debiter;
        // $this->virer = $virer;
    }

    public function __toString(){
        return "Le ".$this->label." de ".$this->titulaire." présente un solde de " 
        .$this->soldeInit." ".$this->devise. "<br>";
    }
    
    // public function crediter(){
    //     if($soldeInit){
    //         echo "<p>Le" .$this->label. " est crédité de X euros</p>";
    //     }else{
    //         $this->isStart= false;
    //         echo "<p>Le" .$this->label. " n'est pas crédité de X euros</p>";
    //     }
    // }

    // public function debiter(){
        
    // }

    // public function virer(){
        
    // }


}

$compte1 = new Compte("Compte Courant",200,"euros","NEMAR Jean");
echo $compte1;


?>


