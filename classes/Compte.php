<?php
class Compte{
    private string $nom;
    private string $libelle;
    private float $solde;
    private string $devise;
    private Titulaire $titulaire;

    public function __construct(string $nom, string $libelle, float|string $solde, string $devise, Titulaire $titulaire){
        $this->libelle = $libelle;
        $this->solde = $solde;
        $this->devise = $devise;
        $this->titulaire = $titulaire;
        $this->titulaire->addCompte($this);
        $this->nom = $nom;
    }

    public function getTitulaire()
    {
        return $this->titulaire;
    }

    public function setTitulaire($titulaire)
    {
        $this->titulaire = $titulaire;

        return $this;
    }

    public function getDevise()
    {
        return $this->devise;
    }

    
    public function setDevise($devise)
    {
        $this->devise = $devise;

        return $this;
    }

    public function getSolde()
    {
        return $this->solde;
    }

    public function setSolde($solde)
    {
        $this->solde = $solde;

        return $this;
    }

    public function getLibellé()
    {
        return $this->libelle;
    }

    public function setLibellé($libelle)
    {
        $this->libelle = $libelle;

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
    
    //ajoute de l'argent sur un compte
    public function credit($solde){
         $this->solde += $solde;
    }
    
    //retire l'argent d'un compte
    public function debit($debit){
        $this->solde -= $debit;
    }

    //transfer l'argent d'un compte a un autre
    public function transfer($transfer, $given){
    if($this->solde < $transfer){
        echo "vous n'avez pas assez de fond pour faire un virement";
    }
    elseif($this->solde >= $transfer){
        $this->debit($transfer);
        $given->credit($transfer);   
    }
    }

    //recupère toute les infos d'un compte dont le nom et prenom du titulaire
    public function getInfos(){
    echo $this->getNom().": solde = ".$this->getSolde()." ".$this->getDevise()." detenus par ".$this->titulaire->getInfos();
    }
}