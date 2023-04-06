<h1>Exercice 15</h1>

<p>
Créer une class personne (nom, prénom et date de naissance).
Instancier 2 personnes et afficher leurs informations: nom, prénom et âge.<br>
$p1 = new Personne("DUPONT","Michel","1980-02-19");
$p2 = new Personne("DUCHEMIN","Alice","1985-01-17");
</P>

<h2>Résultat</h2>
<!-- 
CREER UNE CLASS Personne (Commence toujours par une majuscule)
    
    1   Déclarer les variables publique pour y accéder facilement
    2   Déclarer la fonction __construct() et instancier les variables
    3   Déclarer une fonction calculerAge 
 -->
<?php
class Personne{

  //Définition des propriétés de la class Personne
        //Propriétés(Variables) de la class Personne qui stock le nom de la personne
      
    private string $nom;
    private string $prenom;
    private DateTime $date;

 //METHODE MAGIQUE: Magic Method Constructor
        //Cette méthode est annoncée par __ pour désigner les méthodes à employer
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function __construct(string $nom, string $prenom, string $date){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->date = new DateTime($date);
    }
 //Entre les {} se trouvent les arguments utilsés pour paramêtrer à l'instanciation
        //(Créer un objet dans la mémoire de l'ordinateur) Utiliser $this pour désigner l'objet et accéder à sa valeur
        // Le Principe d'encapsulation La portée d'une variable ou fonction
        
        //private: une propriété ou méthode private sera accessible seulement au sein de la classe;
        //public: une propriété ou méthode sera accessible n'importe où
        
  ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 
        //getteur me permet de récupérer la valeur d'une propriété
        //setteur me permet de attribuer une valeur d'une propriété 

  //Créer une nouvelle fonction pour utiliser dans une phrase les valeurs des variables par concatenation
  
    public function calculerAge(){
        $now = new DateTime();
        $dateNaiss = $this->date;
    
        $difference = date_diff($dateNaiss, $now);
        return $difference->y;
    }
//METHODE function __toString permet de retourner un objet sous la fome d'une chaîne de caractères
    
    public function __toString(){
        return $this->nom." ".$this->prenom." a ".$this->calculerAge()." ans.<br>";
    }

}

//Créer(Déclarer) les animaux

$p1 = new Personne("DUPONT","Michel","1980-02-19");
$p2 = new Personne("DUCHEMIN","Alice","1985-01-17");

//Faire appel à la méthode pour attribuera les bonnes valeurs aux propriétés des personnes
        
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