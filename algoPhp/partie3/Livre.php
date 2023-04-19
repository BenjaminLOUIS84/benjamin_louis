<?php

class Livre {
  //attributs
  private string $title;
  private int $pages;
  private int $year;
  private float $price;

  private Auteur $auteur; //Pour lier l'auteur à sa bibliographie
    
  //constructeur
  public function __construct(string $title,int $pages,int $year,float $price, Auteur $auteur){

    $this->title = $title;
    $this->pages = $pages;
    $this->year = $year;
    $this->price = $price;
    $this->auteur = $auteur; //L'auteur est initialisé

    $auteur->ajouterBibliographie($this); //Fournir toute l'instance en cours de CompteBancaire
  }
 // GETTERS 

 public function getTitle(){
  return $this->title;
  }
  public function getNbPages(){
  return $this->pages;
  }
  public function getDate(){
  return $this->year;
  }
  public function getPrice(){
  return $this->price;
  }
  public function getAuthor(){
  return $this->auteur;
  }

// SETTERS

  public function setTitle(string $title){
    $this->title = $title;
  }
  public function setNbPages(int $pages){
    $this->pages = $pages;
  }
  public function setDate(int $year){
    $this->year = $year;
  }
  public function setPrice($price){
    $this->price = $price;
  }
  public function setAuthor(Auteur $auteur){
    $this->auteur = $auteur;
  }

  //méthodes
  public function getAllBook(){
    return $this->title. " publié en ".$this->pages." contient ".$this->year." pages
    et coûte : ".$this->price. "€<br>";
  }
 
  public function __toString(){ // Retourne toutes les infos d'un livre dont l'auteur.

    return $this->getTitle();
    
}        

}

?>