<?php

class Director{

////////////////////////////////////////////Attributes///////////////////////////////////////////

private string $name;
private string $firstname;
private string $sex;
private int $birthDate;

private array $filmography;

////////////////////////////////////////////Constructor///////////////////////////////////////////

public function __construct(string $name, string $firstname, string $sex, int $birthDate){
    $this->name = $name;
    $this->firstname = $firstname;
    $this->sex = $sex;
    $this->birthDate = $birthDate;
    $this->filmography = [];
  }

////////////////////////////////////////////Getters///////////////////////////////////////////

public function getFirstname(){
    return $this->firstname;
}
public function getName(){
    return $this->name;
} 
public function getSex(){
    return $this->sex;
}
public function getbirthDate(){
    return $this->birthDate;
}

////////////////////////////////////////////Setters///////////////////////////////////////////

public function setFirstname(string $firstname){
    $this->firstname = $firstname;
}
public function setName(string $name){
    $this->name = $name;            
}
public function setSex(string $sex){
    $this->sex = $sex;
}
public function setBirthDate(int $birthDate){
    $this->birthDate = $birthDate;            
}

////////////////////////////////////////////Methods///////////////////////////////////////////

public function addFilmography(Movie $movies) {
    $this->filmography[] = $movies;
}

public function  displayFilmography(){

    $filmography = "Les films de " .$this->firstname. " " .$this->name. " :<br>";

        foreach ($this->filmography as $movies){

      $filmography = $filmography. $movies->getAllMovies();               
    }

    return $filmography;  
}

public function __tostring(){ 

    return $this->getFirstname(). " " .$this->getName()." est un réalisateur de sexe "
    .$this->getSex(). "et né en ".$this->getBirthDate(). "<br>";
} 

} 
?>



