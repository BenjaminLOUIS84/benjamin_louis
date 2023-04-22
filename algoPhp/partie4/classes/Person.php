<?php

class Person{

    ////////////////////////////////////////////Attributes///////////////////////////////////////////

    private string $name;
    private string $firstname;
    private string $sex;
    private DateTime $birthDate;

    private array $movies;

    ////////////////////////////////////////////Constructor///////////////////////////////////////////

    public function __construct(string $name, string $firstname, string $sex, string $birthDate){
        $this->name = $name;
        $this->firstname = $firstname;
        $this->sex = $sex;
        $this->birthDate = new DateTime($birthDate);
        $this->movies = [];
    }
    ////////////////////////////////////////////Getters///////////////////////////////////////////

    public function getFirstname():string{
        return $this->firstname;
    }
    public function getName():string{
        return $this->name;
    } 
    public function getSex():string{
        return $this->sex;
    }
    public function getBirthDate():DateTime{
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
    public function setBirthDate(DateTime $birthDate){
        $this->birthDate = $birthDate;            
    }
    ////////////////////////////////////////////Methods///////////////////////////////////////////

     
    public function addMovie(Movie $movie) {
        $this->movies[] = $movie;
    }

    public function findAge(){
        $now = new DateTime();
        $birthDate = $this->birthDate;
    
        $difference = date_diff($birthDate, $now);
        return $difference->y;
    }
    
    
    public function  getMoviesInfos(){
    
        $movies = "Les films réalisés par "
        .$this->getFirstname(). " " .$this->getName(). " :<br>";
    
            foreach ($this->movies as $movie){
    
          $movies .= $movie->getInfos();               
        }
        return $movies;  
    }
    
    
} 



?>



