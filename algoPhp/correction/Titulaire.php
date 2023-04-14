<?php

class Titulaire{
    //attributs
    private string $nom;
    private string $prenom;
    private DateTime $date;
    private string $ville;
    private array $comptes; //Tableau vide qui contient le ou les comptes

    //constructeur
    public function __construct($nom, $prenom, $date, $ville){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->date = $date;
        $this->ville = $ville;

        $this->comptes = [];
    }
    
    //methodes

    public function ajouterCompte(CompteBancaire $comptes) {
        $this->comptes[] = $comptes;
        // Equivalent à : array_push($this->comptes, $comptes);
    }

    //getter-setter

}

?>