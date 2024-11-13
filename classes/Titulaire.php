<?php
class Titulaire {
    private string $nom;
    private string $prenom;
    private DateTime $date;
    // private int $age;
    private string $ville;
    private array $comptes;


    public function __construct(string $nom, string $prenom, string $date, string $ville){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->date = new Datetime($date);
        $this->age = new DateTime('today')sub(new DateInterval($this->getDate));
        $this->ville = $ville;
        $this->comptes = [];
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

    public function addCompte(Compte $comptes){
        $this->comptes[] = $comptes;
    }

    public function getInfos(){
        return $this->nom." ".$this->prenom." ";
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
}

