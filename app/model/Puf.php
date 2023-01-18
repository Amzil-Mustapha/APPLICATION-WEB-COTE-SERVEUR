<?php

class Puf{

    private $numP;
    private $numU;
    private $numF;
    private $quantite;

    public function __construct($numP, $numU, $numF, $quantite) {
        $this->numP = $numP;
        $this->numU = $numU;
        $this->numF = $numF;
        $this->quantite = $quantite;
    }

    public function getNumP(){
        return $this->numP;
    }

    public function getNumU(){
        return $this->numU;
    }

    public function getNumF(){
        return $this->numF;
    }

    public function getQuantite(){
        return $this->quantite;
    }

    public function setNumP($a){
        return $this->numP = $a;
    }

    public function setNumU($a){
        return $this->numU = $a;
    }

    public function setNumF($a){
        return $this->numF = $a;
    }

    public function setQuantite($a){
        return $this->quantite = $a;
    }
}