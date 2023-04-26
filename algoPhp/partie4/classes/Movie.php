<?php

class Movie{

    ////////////////////////////////////////////Attributes///////////////////////////////////////////

    private string $title;
    private int $date;
    private int $duration;
    private string $resume;

    private array $castings;

    ////////////////////////////////////////////Constructor///////////////////////////////////////////

    public function __construct(string $title, int $date, int $duration, string $resume){

        $this->title = $title;
        $this->date = $date;
        $this->duration = $duration;
        $this->resume = $resume;

        $this->castings = [];
        
    }
    ////////////////////////////////////////////Getters///////////////////////////////////////////

    public function getTitle():string{
        return $this->title;    
    }
    public function getDate():int{
        return $this->date;
    }
    public function getDuration():int{
        return $this->duration;
    }
    public function getResume():string{
        return $this->resume;   
    }

    ////////////////////////////////////////////Setters///////////////////////////////////////////

    public function setTitle(string $title){
        $this->title = $title;
    }
    public function setDate(int $date){
        $this->date = $date;
    }
    public function setDuration(int $duration){
        $this->duration = $duration;
    }
    public function setResume(string $resume){
        $this->resume = $resume;
    }
    ////////////////////////////////////////////Methods///////////////////////////////////////////
    
    public function calcDuration(){
        $hour = floor($this->duration/60);
        $minute = ($this->duration % 60);
        $duration = $hour.'h'.$minute;
        return $duration;
    }



    public function getInfos(){
        return "<br>" .$this->getTitle(). " produit en " .$this->getDate(). 
        "<br>Durée : " .$this->getDuration()." minutes soit : ".$this->calcDuration(). " heures<br>
        
        <br>Synopsis : <br>" .$this->getResume(). "<br>";
    }

    public function addCasting(Casting $castings){
      $this->castings[] = $castings;  
    }

    public function __toString(){
        return "Dans le film " .$this->getTitle() ."<br>";
    }

}

?>



