<?php

class CompteBancaire {
    //attributs
    private string $label;
    private float $solde;
    private float $montant;
    private string $devise;

    private Titulaire $titulaire; //Pour lier le Titulaire au Compte
    
    //constructeur
    public function __construct($label, $solde, $montant, $devise, Titulaire $titulaire){

        $this->label = $label;
        $this->solde = $solde;
        $this->devise = $devise;
    

        $this->titulaire = $titulaire; //Le Titulaire est initialisé
        $titulaire->ajouterCompte($this); //Fournir toute l'instance en cours de CompteBancaire
    }

    //méthodes
    public function __toString(){
        return "Le ".$this->label." de ".$this->titulaire." présente un solde de " 
        .$this->solde." ".$this->devise. " et dispose de " 
        .$this->montant." ".$this->devise. " pour effectuer une opération<br>";
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
         echo "Virement de ".$montant $this->devise. "effectué<br>";
         $compteCible->crediter($montant); // On crédite le compte cible.            
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