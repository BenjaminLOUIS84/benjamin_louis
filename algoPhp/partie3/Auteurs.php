<?php

class Auteur{
  //attributs
  private string $name;
  private string $firstname;

  private array $bibliography;//Tableau vide qui contiendra les livres de l'auteur

  //constructeur
  public function __construct(string $name, string $firstname){
    $this->name = $name;
    $this->firstname = $firstname;

    $this->bibliography = [];
  }

  //methodes
  public function ajouterBibliographie(Livre $bibliography) {
  $this->bibliography[] = $bibliography;
  // Equivalent à : array_push($this->bibliography, $bibliography);
  }

  public function __toString(){
    return $this->firstname." ".$this->name."<br>";
  }
///////////////////////////////////////////////////////Méthode pour afficher tous les livres//////////////////////////////////////////
  
public function afficherLivres($bibliography){
    $result = "<h2>L'ensemble des ouvrages de " .$this->firstname. " " .$this->name. "</h2>";
    foreach($this->bibliography as $bibliography){
      $result = $bibliography->getAllBooks()."<br>";
    }
    return $result;
  }

  //  public function afficherLivres($bibliography){
  //    echo "<form>";
  //       foreach ($bibliography as $value) {
  //            echo "<label>".$value."</label>"."<br>"; 
  //        } 
  //    echo "</form>";  
  //   }
}

?>