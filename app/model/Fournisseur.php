<?php

class Fournisseur{

    private $num;
    private $nom;
    private $ville;

    public function __construct($num, $nom, $ville) {
        $this->num = $num;
        $this->nom = $nom;
        $this->ville = $ville;
    }

    public function getNum(){
        return $this->num;
    }

    public function getNom(){
        return $this->nom;
    }

    public function getVille(){
        return $this->ville;
    }

    public function setNum($a){
        return $this->num = $a;
    }

    public function setNom($a){
        return $this->nom = $a;
    }

    public function setVille($a){
        return $this->ville = $a;
    }
}