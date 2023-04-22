<?php
class Actor extends Person{

    ////////////////////////////////////////////Attributes///////////////////////////////////////////

    private array $castings;

    ////////////////////////////////////////////Constructor///////////////////////////////////////////

    public function __construct(string $name, string $firstname, string $sex, string $birthDate){
       parent::__construct($name, $firstname, $sex, $birthDate); 
    
       $this->castings = [];
    }

    ////////////////////////////////////////////Methods///////////////////////////////////////////
    
   
    public function getInfos(){ 
        if($this->getSex() == "Masculin"){

        return $this->getFirstname(). " " .$this->getName().
        " est un acteur de sexe ".$this->getSex().
        " et né le ".$this->getBirthDate()->format("d/m/Y")."<br>
        Il est donc âgé de " .$this->findAge(). " ans.<br>";

        }else{

        return $this->getFirstname(). " " .$this->getName().
        " est une actrice de sexe ".$this->getSex().
        " et née le ".$this->getBirthDate()->format("d/m/Y")."<br>
        Elle est donc âgée de " .$this->findAge(). " ans.<br>";
        }

    } 

    public function addCasting(Casting $castings){
        $this->castings[] = $castings;  
      }
    
    public function __toString(){
        return "est interprété par ".$this->getFirstname(). " " .$this->getName() ."<br>";
    }
}




?>