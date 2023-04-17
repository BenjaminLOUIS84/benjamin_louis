<?php

class Livres {
  //attributs
  private string $title;
  private int $pages;
  private int $year;
  private int $price;

  private Auteurs $auteurs; //Pour lier l'auteur à sa bibliographie
    
  //constructeur
  public function __construct($title, $pages, $year, $price, Auteur $auteurs){

    $this->title = $title;
    $this->pages = $pages;
    $this->year = $year;
    $this->price = $price;
    
    $this->auteurs = $auteurs; //L'auteur est initialisé
      $auteurs->ajouterBibliographie($this); //Fournir toute l'instance en cours de CompteBancaire
  }

  //méthodes
  public function __toString(){
    return "Les Livres de ".$this->auteurs." sont: <br>"
    .$this->title." publié en ".$this->year." contient ".$this->pages." pages
    et coûte : ".$this->price. "€<br>";
  }
 
  //getter
  // public function getTitle(){
  //   return $this->title;
  // }
  // public function getPages(){
  //   return $this->pages;
  // }
  // public function getYear(){
  //   return $this->year;
  // }
  // public function getPrice(){
  //   return $this->price;
  // }


}

?>