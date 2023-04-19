<?php

class CompteBancaire {
    //attributs
    private string $label;
    private float $solde;
    private float $montant;
    private string $devise;

    private Titulaire $titulaire; //Pour lier le Titulaire au Compte
    
    //constructeur
    public function __construct(string $label, float $solde, float $montant, string $devise, Titulaire $titulaire){

        $this->label = $label;
        $this->solde = $solde;
        $this->montant = $montant;
        $this->devise = $devise;
        $this->titulaire = $titulaire; //Le Titulaire est initialisé
        
        $titulaire->ajouterCompte($this); //Fournir toute l'instance en cours de CompteBancaire
    }

// GETTERS 

    public function getLabel(){
        return $this->label;
    }
    public function getSolde(){
        return $this->solde;
    }
    public function getMontant(){
        return $this->montant;
    }
    public function getdevise(){
        return $this->devise;
    }
    public function getTitulaire(){
        return $this->titulaire;
    }

// SETTERS

    public function setLabel(string $label){
        $this->label = $label;
    }
    public function setSolde(float $solde){
        $this->solde = $solde;
    }
    public function setMontant(float $montant){
        $this->montant = $montant;
    }
    public function setDevise(string $devise){
        $this->devise = $devise;
    }
    public function setTitulaire(Titulaire $titulaire){
        $this->titulaire = $titulaire;
    }

//méthodes
    public function getAllCount(){
        return "Le ".$this->label." de ".$this->titulaire." présente un solde de " 
        .$this->solde." ".$this->devise. " et dispose de " 
        .$this->montant." ".$this->devise. " pour effectuer une opération<br>";
    }

    public function __toString(){ // Retourne toutes les infos d'un livre dont l'auteur.
        return $this->getLabel();  
    }
    
    public function crediter($montant){ // Methode permettant de créditer le compte
        $this->solde += $montant;
        echo "Votre solde est désormais de " .$this->solde. " " .$this->devise. "<br>";
    }
    
    public function debiter($montant){ // Methode permettant de débiter le compte. 
        $this->solde -= $montant;
        echo "Votre solde est désormais de " .$this->solde. " " .$this->devise. "<br>";
    }
    
    public function virement(CompteBancaire $compteCible, $montant){ // Fonction virement depuis le compte actuel vers un compte cible.

        $this->debiter($montant); // On débite de la valeur demandée le compte actuel.

         echo "Virement de ".$montant." ".$this->devise. "<br>";

         $compteCible->crediter($montant); // On crédite le compte cible.            
    } 
    
    
}

?>