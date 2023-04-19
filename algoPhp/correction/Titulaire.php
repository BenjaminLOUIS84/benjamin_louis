<?php

class Titulaire{
    //attributs
    private string $nom;
    private string $prenom;
    private DateTime $date;
    private string $ville;

    private array $comptes; //Tableau vide qui contient le ou les comptes
    

    //constructeur
    public function __construct(string $nom, string $prenom, $date, string $ville){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->date = new DateTime($date);
        $this->ville = $ville;
        $this->comptes = [];
        
    }

    //getter

    public function getNom(){
        return $this->nom;
    }
    public function getPrenom(){
        return $this->prenom;
    }
    public function getDate(){
        return $this->date;
    }
    public function getVille(){
        return $this->ville;
    }
    
    //setter
    public function setNom(){
        $this->nom = $newNom;
    }
    public function setPrenom(){
        $this->prenom = $newPrenom;
    }
    public function setDate(){
        $this->date = $newDate;
    }
    public function setVille(){
        $this->ville = $newVille;
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

///////////////////////////////////////////////////////Méthode pour afficher tous les livres//////////////////////////////////////////

    public function afficherComptes(){

        $comptes = "Les comptes de " .$this->prenom. " " .$this->nom. " :<br>";
    
        foreach ($this->comptes as $count){
          $comptes = $comptes. $count->getAllCount();               
        }
    
        return $comptes;  
    }
    
    public function __toString(){
        return $this->getNom()." ".$this->getPrenom()." a ".$this->calculerAge()." ans et est domicilié à " 
        .$this->getVille()."<br>";
    }
  
}
?>