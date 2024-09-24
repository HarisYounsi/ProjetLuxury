<?php

class panier
{
    public $produitId;
    public $quantite;
    public $libelle;
    public $prix;

    //Constructeur
    public function __construct($produitId, $quantite, $libelle, $prix)
    {
        $this->produitId = $produitId;
        $this->quantite = $quantite;
        $this->libelle = $libelle;
        $this->prix = $prix;
    }

}





?>