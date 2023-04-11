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

    public function __construct($nom, $prenom, $date, $ville){
        $this->nom = $nom;  
        $this->prenom = $prenom;
        $this->date = new DateTime($date);
        $this->ville = $ville;
    }

    public function calculerAge(){
        $now = new DateTime();
        $dateNaissance = $this->date;
    
        $difference = date_diff($dateNaissance, $now);
        return $difference->y;

    }

    public function __toString(){
        return $this->nom." ".$this->prenom." a ".$this->calculerAge()." ans et habite à " .$this->ville."<br>";
    }


}

$personne1 = new Titulaire("NEMAR", "Jean", "1980-02-19", "Colmar");
echo $personne1;


class Compte extends Titulaire {

    private string $label;
    private int $soldeInit;
    private string $devise;
    

    public function __construct($label, $soldeInit, $devise){
        $this->label = $label;
        $this->soldeInit = $soldeInit;
        $this->devise = $devise;
    }

    public function __toString(){
        return "Le ".$this->label." présente un solde de " .$this->soldeInit." ".$this->devise. "<br>";
    }
    
}

$compte1 = new Compte("Compte Courant",200,"euros");
echo $compte1;


?>


