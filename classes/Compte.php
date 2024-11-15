<?php
class Compte{
    private string $libelle;
    private float $solde;
    private string $devise;
    private Titulaire $titulaire;

    public function __construct(string $libelle, float|string $solde, string $devise, Titulaire $titulaire){
        $this->libelle = $libelle;
        $this->solde = $solde;
        $this->devise = $devise;
        $this->titulaire = $titulaire;
        $this->titulaire->addCompte($this);
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
    public function credit($solde){
         $this->solde += $solde;
    }
    public function debit($debit){
        $this->solde -= $debit;
   }
   public function transfer($transfer,$giver,$given){
    if($this->solde < $transfer){
        echo "vous n'avez pas assez de fond pour faire un virement";
    }
    elseif($this->solde >= $transfer){
        $giver->debit($transfer);
        $given->credit($transfer); 
        
    }
   }
}