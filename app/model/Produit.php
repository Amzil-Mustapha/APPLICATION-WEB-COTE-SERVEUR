<?php

class Produit{

    private $num;
    private $nom;
    private $prixU;

    public function __construct($num, $nom, $prixU) {
        $this->num = $num;
        $this->nom = $nom;
        $this->prixU = $prixU;
    }

    public function getNum(){
        return $this->num;
    }

    public function getNom(){
        return $this->nom;
    }

    public function getPrixU(){
        return $this->prixU;
    }

    public function setNum($a){
        return $this->num = $a;
    }

    public function setNom($a){
        return $this->nom = $a;
    }

    public function setPrixU($a){
        return $this->prixU = $a;
    }
}