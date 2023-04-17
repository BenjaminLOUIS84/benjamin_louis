<?php

class Movie{

////////////////////////////////////////////Attributes///////////////////////////////////////////

private string $title;
private int $date;
private int $duration;
private string $gender;
private string $resume;

private Director $director;
private Star $star;

////////////////////////////////////////////Constructor///////////////////////////////////////////

public function __construct(string $title, int $date, int $duration,
                            string $gender, string $resume, Director $director, Star $star){

$this->title = $title;
$this->date = $date;
$this->duration = $duration;
$this->gender = $gender;
$this->resume = $resume;
$this->director = $director;
$this->star = $star;

$director->addDirector($this);
$star->addStar($this);
}

////////////////////////////////////////////Getters///////////////////////////////////////////

public function getTitle(){
    return $this->title;
}
public function getDate(){
    return $this->date;
}
public function getDuration(){
    return $this->duration;
}
public function getGender(){
    return $this->gender;
}
public function getResume(){
    return $this->resume;
}
public function getDirector(){
        return $this->director;
}
public function getStar(){
        return $this->star;
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
public function setGender(string $gender){
    $this->gender = $gender;
}
public function setResume(string $resume){
    $this->resume = $resume;
}
public function setDirector(string $director){
    $this->director = $director;
}
public function setStar(string $star){
    $this->star = $star;
}

////////////////////////////////////////////Methods///////////////////////////////////////////








}
?>



