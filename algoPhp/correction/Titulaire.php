<?php

class Titulaire{
    //attributs
    private string $nom;
    private string $prenom;
    private DateTime $date;
    private string $ville;
    private array $comptes; //Tableau vide qui contient le ou les comptes
    //private array $livrets;
    
    //constructeur
    public function __construct($nom, $prenom, $date, $ville){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->date = new DateTime($date);
        $this->ville = $ville;

        $this->comptes = [];
       // $this->livrets = [];
    }
    
    //methodes

    public function ajouterCompte(CompteBancaire $comptes) {
        $this->comptes[] = $comptes;
        // Equivalent à : array_push($this->comptes, $comptes);
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

    //getter-setter
}
$personne1 = new Titulaire("NEMAR", "Jean", "1980-02-19", "Colmar","Compte Courant","Livret A");
echo $personne1;
echo"<br>";

?>