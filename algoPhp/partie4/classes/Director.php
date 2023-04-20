<?php
class Director extends Person{
    
    ////////////////////////////////////////////Constructor///////////////////////////////////////////

    public function __construct(string $name, string $firstname, string $sex, string $birthDate){
       parent::__construct($name, $firstname, $sex, $birthDate);  
    }

    public function getInfos(){ 
        return $this->getFirstname(). " " .$this->getName().
        " est un réalisateur de sexe ".$this->getSex().
        " et né le ".$this->getBirthDate()->format("d/m/Y")."<br>";
    }
    
    
}



?>