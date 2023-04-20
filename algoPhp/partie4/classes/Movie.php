<?php

class Movie{

    ////////////////////////////////////////////Attributes///////////////////////////////////////////

    private string $title;
    private int $date;
    private int $duration;
    private string $resume;

    //private Gender $gender;
    //private Director $director;
    //private Actor $actor;
    

    ////////////////////////////////////////////Constructor///////////////////////////////////////////

    public function __construct(string $title, int $date, int $duration, string $resume
                                //Director $director,Actor $actor, 
                                ){

        $this->title = $title;
        $this->date = $date;
        $this->duration = $duration;
        $this->resume = $resume;

        //$this->gender = $gender;

        //$this->director = $director;
        //$this->actor = $actor;
        
        //$gender->addGender($this);
        //$director->addDirector($this);
        //$actor->addActor($this);
        
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

    public function getInfos(){
        return "<br>" .$this->getTitle(). " produit en " .$this->getDate(). 
        "<br>Durée : " .$this->getDuration()." minutes<br>
        <br>Synopsis : <br>" .$this->getResume(). "<br>";
    }
 
    

    
}

?>



