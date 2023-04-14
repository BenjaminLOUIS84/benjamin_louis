<?php

class CompteBancaire {
    //attributs
    private string $label;
    private float $solde;
    private string $devise;
    private Titulaire $titulaire; //Pour lier le Titulaire au Compte
    
    //constructeur
    public function __construct($label, $solde, $devise, Titulaire $titulaire){
        $this->label = $label;
        $this->solde = $solde;
        $this->devise = $devise;

        $this->titulaire = $titulaire; //Le Titulaire est initialisé
        $this->titulaire->ajouterCompte($this); //Fournir toute l'instance en cours de CompteBancaire
    }

    //méthodes

    //getter-setter


}


?>