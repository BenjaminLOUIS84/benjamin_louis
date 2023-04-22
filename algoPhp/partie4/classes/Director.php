<?php
class Director extends Person{
    
    ////////////////////////////////////////////Constructor///////////////////////////////////////////

    public function __construct(string $name, string $firstname, string $sex, string $birthDate){
       parent::__construct($name, $firstname, $sex, $birthDate);  
    }
    
    ////////////////////////////////////////////Methods///////////////////////////////////////////
    

    public function getInfos(){ 
        if($this->getSex() == "Masculin"){

        return $this->getFirstname(). " " .$this->getName().
        " est un réalisateur de sexe ".$this->getSex().
        " et né le ".$this->getBirthDate()->format("d/m/Y")."<br>
        Il est donc âgé de " .$this->findAge(). " ans.<br>";

        }else{

        return $this->getFirstname(). " " .$this->getName().
        " est une réalisatrice de sexe ".$this->getSex().
        " et née le ".$this->getBirthDate()->format("d/m/Y")."<br>
        Elle est donc âgée de " .$this->findAge(). " ans.<br>";
        }

    } 
   
}



?>