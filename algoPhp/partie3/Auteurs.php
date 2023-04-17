<?php

class Auteur{
  //attributs
  private string $name;
  private string $firstname;

  private array $bibliography;//Tableau vide qui contiendra les livres de l'auteur

  //constructeur
  public function __construct($name, $firstname){
    $this->name = $name;
    $this->firstname = $firstname;

    $this->bibliography = [];
  }

  //methodes
  public function ajouterBibliographie(Livres $bibliography) {
  $this->bibliography[] = $bibliography;
  // Equivalent à : array_push($this->bibliography, $bibliography);
  }

  public function __toString(){
    return "Les Livres de " .$this->name." ".$this->firstname."<br>";
  }

}

?>