<?php

class Person{

    ////////////////////////////////////////////Attributes///////////////////////////////////////////

    private string $name;
    private string $firstname;
    private string $sex;
    private DateTime $birthDate;

    ////////////////////////////////////////////Constructor///////////////////////////////////////////

    public function __construct(string $name, string $firstname, string $sex, string $birthDate){
        $this->name = $name;
        $this->firstname = $firstname;
        $this->sex = $sex;
        $this->birthDate = new DateTime($birthDate);
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
    public function getBirthDate(){
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

    public function getInfoPerson(){ 
        return $this->getFirstname(). " " .$this->getName().
        " est un réalisateur de sexe ".$this->getSex().
        " et né le ".$this->getBirthDate()->format("d/m/Y")."<br>";
    } 

} 

// class Director extends Person{
    
//     ////////////////////////////////////////////Attributes///////////////////////////////////////////

//     private array $filmography;

//     ////////////////////////////////////////////Constructor///////////////////////////////////////////

//     public function __construct(string $name, string $firstname, string $sex, string $birthDate){
//        parent::__construct($name, $firstname, $sexe, $birthDate);
//        $this->bibliography = [];
//     }

//     public function addFilmography(Movie $movies) {
//         $this->filmography[] = $movies;
//     }
    
//     public function  displayFilmography(){
    
//         $filmography = "Les films réalisés par "
//         .$this->getFirstname(). " " .$this->getName(). " :<br>";
    
//             foreach ($this->filmography as $movies){
    
//           $filmography = $filmography. $movies->getAllMovies();               
//         }
//         return $filmography;  
//     }
    
// }

// class Actor extends Person{
    
//     public function __construct(string $name, string $firstname, string $sex, string $birthDate){
//         parent::__construct(string $name, string $firstname, string $sex, string $birthDate);      
//     }
//     public function fetch(){
//         echo $this->getFirstname(). " " .$this->getName()." est un acteur de sexe "
//         .$this->getSex(). " et né le ".$this->birthDate->format("d/m/Y")."<br>";  
//     }
//}

?>



