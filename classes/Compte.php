<?php
class Compte{
    private string $libelle;
    private int $solde;
    private string $devise;
    private Titulaire $titulaire;

    public function __construct(string $libelle, int $solde, string $devise, Titulaire $titulaire){
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
        return $this->libellé;
    }

    public function setLibellé($libellé)
    {
        $this->libellé = $libellé;

        return $this;
    }
}