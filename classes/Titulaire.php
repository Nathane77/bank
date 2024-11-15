<?php
class Titulaire {
    private string $nom;
    private string $prenom;
    private DateTime $date;
    private string $age;
    private string $ville;
    private array $comptes;


    public function __construct( string $prenom,string $nom, string $date, string $ville){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->date = new Datetime($date);
        $this->ville = $ville;
        $this->comptes = [];
        $this->age = "0";
    }

    public function getComptes()
    {
        return $this->comptes;
    }

    public function setComptes($comptes)
    {
        $this->comptes = $comptes;

        return $this;
    }

    public function getVille()
    {
        return $this->ville;
    }

    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }
    
    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    //ajouter un compte au tableau comptes du titulaire 
    public function addCompte(Compte $comptes){
        $this->comptes[] = $comptes;
    }

    //recupère le nom et prenom d'un titulaire
    public function getInfos(){
        return $this->getNom()." ".$this->getPrenom();
    }

    //recupere toute les infos d'un titulaire
    public function getInfosFull(){
        echo $this->getNom()." ".$this->getPrenom()." ".$this->getAge()." ans "." à ".$this->getVille()."<br><br>Comptes:<br>";
        foreach($this->comptes as $compte){
           echo "<br>".$compte->getNom().": solde = ".$compte->getSolde()."".$compte->getDevise()."<br>";
        }
    }
    
    //calcul l'age d'un titulaire et set l'age de l'utilisateur en fonction
    public function calcAge(){
        $today = new DateTime("today");
        $birth = $this->date;
        $interval = $today->diff($birth);  
        $this->setAge($interval->format("%Y%"));
    }
}

