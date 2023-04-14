<?php

class CompteBancaire {
    //attributs
    private string $label;
    private float $solde;
    private float $montant;
    private string $devise;
    private bool $crediter;
    private bool $debiter;
    private bool $virer;

    private Titulaire $titulaire; //Pour lier le Titulaire au Compte
    
    //constructeur
    public function __construct($label, $solde, $montant, $devise, Titulaire $titulaire, 
                                $crediter=true, $debiter= true, $virer=true){

        $this->label = $label;
        $this->solde = $solde;
        $this->montant = $montant;
        $this->devise = $devise;
        $this->crediter = $crediter;
        $this->debiter = $debiter;
        $this->virer = $virer;

        $this->titulaire = $titulaire; //Le Titulaire est initialisé
        $titulaire->ajouterCompte($this); //Fournir toute l'instance en cours de CompteBancaire
    }

    //méthodes
    public function __toString(){
        return "Le ".$this->label." de ".$this->titulaire." présente un solde de " 
        .$this->solde." ".$this->devise. " et dispose de " 
        .$this->montant." ".$this->devise. " pour effectuer une opération<br>";
    }

    public function calculerCredit(){
        return $this->solde + $this->montant;
    }

    public function calculerDebit(){
        return $this->solde - $this->montant;
    }

    public function credit(){
        if($this->crediter){
            $this->crediter = true;
            echo "<p>Si le " . $this->getLabel() .  " est crédité de: " 
            .$this->getMontant(). " " .$this->devise." alors le solde de ce compte sera de: "
            .$this->calculerCredit(). " " .$this->devise.  "</p>"; 
        }else{
            $this->crediter = false;
            echo "<p>Le  " . $this->getLabel() . " n'est pas crédité</p>"; 
        }
    
    }
    public function debit(){
        if($this->debiter){
            $this->debiter = true;
            echo "<p>Si le " . $this->getLabel() . "  est débité de: " 
            .$this->getMontant(). " " .$this->devise." alors le solde de ce compte sera de: "
            .$this->calculerDebit(). " " .$this->devise.  "</p>";
        }else{
            $this->debiter = false;
            echo "<p>Le  " . $this->getLabel() . " n'est pas débité</p>"; 
        }

    }
    public function virement(){
        if($this->virer){
            $this->virer = true;
            echo "<p>Si un virement de " .$this->getMontant(). " " .$this->devise. " du " . $this->getLabel() .  
             " est effectué alors le solde du " .$this->getLabel(). " sera de " .$this->calculerDebit(). " " .$this->devise. "</p>"; 
        }else{
            $this->virer = false;
            echo "<p>Le virement du " . $this->getLabel() . " n'a pas été effectué</p>"; 
        }

    }
    
    //getter-setter
    public function getLabel(){
        return $this->label;
    }

    public function getInfos(){
        return $this->titulaire;
    }

    public function getSolde(){
        return $this->solde;
    }
    
    public function getMontant(){
        return $this->montant;
    }
}
?>