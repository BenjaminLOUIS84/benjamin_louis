<?php

class Role {
    ////////////////////////////////////////////Attributes///////////////////////////////////////////
    private string $role;

    private array $castings;
     
    ////////////////////////////////////////////Constructor///////////////////////////////////////////

    public function __construct(string $role){
       
        $this->role = $role;
        $this->castings = [];
     }
 
    ////////////////////////////////////////////Getter & Setter///////////////////////////////////////////

    public function getRole():string
    {
        return $this->role;
    }

    public function setHero($role)
    {
        $this->role = $role;
        return $this;
    }
    ////////////////////////////////////////////Method///////////////////////////////////////////

    public function getInfos(){ 
        return $this->getRole();
    }
    public function addCasting(Casting $castings){
        $this->castings[] = $castings;  
      }

    public function __toString(){
        return $this->getRole()." ";
    }
   
}


?>



