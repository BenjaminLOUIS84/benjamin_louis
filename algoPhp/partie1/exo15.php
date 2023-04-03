<h1>Exercice 15</h1>

<p>
Créer une class personne (nom, prénom et date de naissance).
Instancier 2 personnes et afficher leurs informations: nom, prénom et âge.<br>
$p1 = new Personne("DUPONT","Michel","1980-02-19");
$p2 = new Personne("DUCHEMIN","Alice","1985-01-17");
</P>

<h2>Résultat</h2>

<?php
class Personne{

    public string $nom;
    public string $prenom;
    public DateTime $date;

    public function __construct(string $nom, string $prenom, string $date){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->date = new DateTime($date);
    }

    public function calculerAge(){
        $now = new DateTime();
        $dateNaiss = $this->date;
    
        $difference = date_diff($dateNaiss, $now);
        return $difference->y;
    }
    
    public function __toString(){
        return $this->nom." ".$this->prenom." a ".$this->calculerAge()." ans.<br>";
    }

}

$p1 = new Personne("DUPONT","Michel","1980-02-19");
$p2 = new Personne("DUCHEMIN","Alice","1985-01-17");


//var_dump($p1);

echo"<br>";

//echo $p1->calculerAge();
echo"<br>";
echo $p1;

//var_dump($p2);

echo"<br>";

//echo $p2->calculerAge();
echo"<br>";
echo $p2;
?>