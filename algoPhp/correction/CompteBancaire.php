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
        return "Votre solde est désormais de " .$this->solde. " " .$this->devise. "<br>";
        }
    
    public function debiter($montant){ // Methode permettant de débiter le compte. 
         $this->solde -= $montant;
         return "Votre solde est désormais de " .$this->solde. " " .$this->devise. "<br>";
        }
    
    
    public function virement(CompteBancaire $compteCible, float $montant){ // Fonction virement depuis le compte actuel vers un compte cible.

            if (($this->getSolde() - $montant) < 0) { // Si le solde du compte actuel le permet, alors on effectue le virement.
    
                return "Solde insuffisant pour effectuer ce virement. <br>";
    
            } else {
    
                $this->debiter($montant); // On débite de la valeur demandée le compte actuel.
    
                return "Virement de " .$montant $this->devise.  "effectué<br>";
    
                $compteCible->crediter($montant); // On crédite le compte cible.            
    
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