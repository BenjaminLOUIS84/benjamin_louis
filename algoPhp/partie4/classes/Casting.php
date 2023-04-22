<?php

class Casting{

    ////////////////////////////////////////////Attributes///////////////////////////////////////////

    private Movie $movie;
    private Role $role;
    private Actor $actor;

    ////////////////////////////////////////////Constructor///////////////////////////////////////////

    public function __construct(Movie $movie, Role $role, Actor $actor){
      $this->Movie = $movie;
      $this->Role = $role;
      $this->Actor = $actor; 
      
      $movie->addCasting($this);
      $role->addCasting($this);
      $actor->addCasting($this);
    }
    ////////////////////////////////////////////Getters///////////////////////////////////////////
    public function getMovie()
    {
        return $this->movie;
    }
    public function getRole()
    {
        return $this->role;
    }
    public function getActor()
    {
        return $this->actor;
    }
    ////////////////////////////////////////////Setters///////////////////////////////////////////
    public function setMovie($movie)
    {
        $this->movie = $movie;
        return $this;
    }
    public function setRole($role)
    {
        $this->role = $role;
        return $this;
    }
    public function setActor($actor)
    {
        $this->actor = $actor;
        return $this;
    }

    public function __toString(){
        return $this->Movie. $this->Role . $this->Actor;
    }

} 



?>



