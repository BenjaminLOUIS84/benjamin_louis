<?php

class Livres {
  //attributs
  private string $title;
  private int $pages;
  private int $year;
  private int $price;

  private Auteurs $auteurs; //Pour lier l'auteur à sa bibliographie
    
  //constructeur
  public function __construct($title, $pages, $year, $price, Auteurs $auteurs){

    $this->title = $title;
    $this->pages = $pages;
    $this->year = $year;
    $this->price = $price;
    
    $this->auteurs = $auteurs; //L'auteur est initialisé
      $auteurs->ajouterBibliographie($this); //Fournir toute l'instance en cours de CompteBancaire
  }

  //méthodes
  public function __toString(){
    return "Les Livres de ".$this->auteurs.": <br>"
    .$this->title." ".$this->year." ".$this->pages." ".$this->price. "<br>";
  }

}

?>