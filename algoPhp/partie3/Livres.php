<?php

class Livre {
  //attributs
  private string $title;
  private int $pages;
  private int $year;
  private int $price;

  private Auteur $auteur; //Pour lier l'auteur à sa bibliographie
    
  //constructeur
  public function __construct(string $title,int $pages,int $year,int $price, Auteur $auteur){

    $this->title = $title;
    $this->pages = $pages;
    $this->year = $year;
    $this->price = $price;
    
    $this->auteur = $auteur; //L'auteur est initialisé
      $auteur->ajouterBibliographie($this); //Fournir toute l'instance en cours de CompteBancaire
  }

  //méthodes
  public function __toString(){
    return "Le livre " .$this->title." de " .$this->auteur. 
    " publié en ".$this->pages." contient ".$this->year." pages
    et coûte : ".$this->price. "€<br>";
  }
 
  public function getAllBooks(){
    return $this->bibliography;
}

}

?>