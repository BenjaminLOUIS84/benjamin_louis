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
    return "Les Livres de " .$this->firstname." ".$this->name."<br>";
  }

  

}

?>