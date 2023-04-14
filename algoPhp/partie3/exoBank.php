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
<h3>Titulaire et Comptes Bancaires</h3>

<?php

///////////////////////////////////////////////PARAMETRER LA CLASSE TITULAIRE ET CREER UN OBJET ISSU DE CETTE CLASSE////////////////////

class Titulaire {

    private string $nom;
    private string $prenom;
    private DateTime $date;
    private string $ville;
    private string $Compte;
    private string $livret;

    public function __construct($nom, $prenom, $date, $ville, $compte, $livret){
        $this->nom = $nom;  
        $this->prenom = $prenom;
        $this->date = new DateTime($date);
        $this->ville = $ville;
        $this->compte = $compte;
        $this->livret = $livret;
    }

    public function calculerAge(){
        $now = new DateTime();
        $dateNaissance = $this->date;
    
        $difference = date_diff($dateNaissance, $now);
        return $difference->y;

    }

    public function __toString(){
        return $this->nom." ".$this->prenom." a ".$this->calculerAge()." ans et domicilié à " 
        .$this->ville."<br> et dispose d'un ".$this->compte. " et d'un ".$this->livret."<br>";
    }
}

$personne1 = new Titulaire("NEMAR", "Jean", "1980-02-19", "Colmar","Compte Courant","Livret A");
echo $personne1;
echo"<br>";

/////////////////////////////////////////////////////PARAMETRER LA CLASSE COMPTE ET CREER 1 OBJET ISSU DE CETTE CLASSE////////////////////////////////////// 

class Compte {

    private string $label;
    private int $soldeInit;
    private int $montant;
    private string $devise;
    private string $titulaire;
    private bool $crediter;
    private bool $debiter;
    private bool $virer;
    
    

    public function __construct($label, $soldeInit, $montant, $devise, $titulaire, 
        $crediter=true, $debiter= true, $virer=true){
        $this->label = $label;
        $this->soldeInit = $soldeInit;
        $this->montant = $montant;
        $this->devise = $devise;
        $this->titulaire = $titulaire;
        $this->crediter = $crediter;
        $this->debiter = $debiter;
        $this->virer = $virer;
    }

    public function __toString(){
        return "Le ".$this->label." de ".$this->titulaire." présente un solde de " 
        .$this->soldeInit." ".$this->devise. " et dispose de " 
        .$this->montant." ".$this->devise. " pour effectuer une opération<br>";
    }

    public function getLabel(){
        return $this->label;
    }

    public function getInfos(){
        return $this->titulaire;
    }

    public function getSolde(){
        return $this->soldeInit;
    }
    
    public function getMontant(){
        return $this->montant;
    }

    
    public function credit(){
        if($this->crediter){
            $this->crediter = true;
            echo "<p>Si le " . $this->getLabel() . " de " .$this->getInfos() . " est crédité de: " 
            .$this->getMontant(). " " .$this->devise." alors le solde de ce compte sera de: "
            .$this->getSolde(). " + 50 euros soit 250 euros</p>"; 
        }else{
            $this->crediter = false;
            echo "<p>Le  " . $this->getLabel() ." de " .$this->getInfos() . " n'est pas crédité</p>"; 
        }
    
    }
    public function debit(){
        if($this->debiter){
            $this->debiter = true;
            echo "<p>Si le " . $this->getLabel() . " de " .$this->getInfos() . " est débité de: " 
            .$this->getMontant(). " " .$this->devise." alors le solde de ce compte sera de: "
            .$this->getSolde(). " - 50 euros soit 150 euros</p>"; 
        }else{
            $this->debiter = false;
            echo "<p>Le  " . $this->getLabel() ." de " .$this->getInfos() . " n'est pas débité</p>"; 
        }

    }
    public function virement(){
        if($this->virer){
            $this->virer = true;
            echo "<p>Si un virement de " .$this->getMontant(). " " .$this->devise. " du " . $this->getLabel() . " de " .$this->getInfos() . " est effectué
            alors le solde du Livret A sera de " .$this->getSolde(). " " .$this->devise. "</p>"; 
        }else{
            $this->virer = false;
            echo "<p>Le virement du " . $this->getLabel() ." de " .$this->getInfos() . " n'a pas été effectué</p>"; 
        }

    }

}

$compte1 = new Compte("Compte Courant",200,50,"euros","NEMAR Jean");

//////////////////////////CREER LA CLASSE LIVRET A DEPENDANTE DE LA CLASSE COMPTE ET CREER UN OBJET ISSU DE LA CLASS LIVRET A////////////////

 class LivretA extends Compte{
   
     public function __construct($label, $soldeInit, $montant, $devise, $titulaire){
        parent::__construct($label, $soldeInit, $montant, $devise, $titulaire);
        }
}

$compte2 = new LivretA("Livret A",100,50,"euros","NEMAR Jean");

////////////////////////////////////////////////////////////////AFFICHER LES INFORMATIONS/////////////////////////////////////////////
?>

<div  style="display: flex; flex-direction: row; justify-content: flex-start; align-items: center; text-align: left; gap: 20px; font-size:0.7em;">
    <div  style="display: flex; flex-direction: column; justify-content: left; align-items: left; text-align: left;">

        <?php
        echo "<br>";
        echo $compte1;
        echo "<br>";
        echo $compte2;
        ?>

    </div>
    <div  style="display: flex; flex-direction: column; justify-content: flex-start; align-items: left; text-align: left;">

        <?php
        echo $compte1->getLabel();
        echo "<br>";
        echo "*********************************";
        echo "<br>";
        echo "Titualire: " . $compte1->getInfos();
        echo "<br>";
        echo "Solde: " . $compte1->getSolde() . " euros"; 
        ?>

    </div>
    <div  style="display: flex; flex-direction: column; justify-content: flex-start; align-items: left; text-align: left;">

        <?php
        echo $compte2->getLabel();
        echo "<br>";
        echo "*********************************";
        echo "<br>";
        echo "Titulaire: " . $compte2->getInfos();
        echo "<br>";
        echo "Solde: " . $compte2->getSolde() . " euros";
        ?>

    </div>

</div>

<!-- ///////////////////////////////////////////////////////AFFICHER LES OPERATIONS/////////////////////////////////////////////////// -->

<h4>Opérations et Virements</h4>

        <?php
        echo $compte1->credit();
        echo $compte1->debit();
        echo $compte2->credit();
        echo $compte2->debit();
        echo $compte1->virement();
        echo $compte2->virement();
        ?>