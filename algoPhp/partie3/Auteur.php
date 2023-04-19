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

  //getter

  public function getFirstname(){
    return $this->firstname;
  }

  public function getName(){
    return $this->name;
  }

  //setter

  public function setFirstname($newFirstname){
    $this->firstname = $newFirstname;
  }

  public function setName($newNname){
    $this->lastname = $newName;            
  }

  //methodes
  public function ajouterBibliographie(Livre $book) {
    $this->bibliography[] = $book;
    // Equivalent à : array_push($this->bibliography, $bibliography);
  }

  
///////////////////////////////////////////////////////Méthode pour afficher tous les livres//////////////////////////////////////////
  
  public function  afficherBibliographie(){

    $bibliography = "Livres de " .$this. " :<br>";

    foreach ($this->bibliography as $book){
      $bibliography = $bibliography. $book->getAllBook();               
    }

    return $bibliography;  
  }

  public function __toString(){
    return $this->getFirstname()." ".$this->getName()."<br>";
  }

}
?>