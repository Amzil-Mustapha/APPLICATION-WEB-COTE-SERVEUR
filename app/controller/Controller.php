<?php

include dirname(__DIR__) . '../model/Db.php';
include dirname(__DIR__) . '../model/Fournisseur.php';
include dirname(__DIR__) . '../model/Produit.php';
include dirname(__DIR__) . '../model/Puf.php';
include dirname(__DIR__) . '../model/Usine.php';

class Controller extends Db
{
    public $allProduits = [];
    public $allFournisseur = [];
    public $allUsine = [];
    public $allVille = [];
    public $allPuf = [];

    public function getAllProduit()
    {
        $db = new Db();
        $db->connectDb();
        $rs = $db->selectQuery("SELECT * FROM produit");

        while ($line = $rs->fetch()) {
            $produit = new Produit($line["numProduit"], $line["nomP"], $line["prixunitaire"]);
            $this->allProduits[] = $produit;
        }
    }

    public function getAllVille(){
        $db = new Db();
        $db->connectDb();
        $rs = $db->selectQuery("SELECT ville FROM fournisseur UNION SELECT ville FROM usine");

        while ($line = $rs->fetch()) {
            $this->allVille[] = $line;
        }
    }

    public function getAllFournisseur()
    {
        $db = new Db();
        $db->connectDb();
        $rs = $db->selectQuery("SELECT * FROM fournisseur");

        while ($line = $rs->fetch()) {
            $fournisseur = new Fournisseur($line['numfournisseur'], $line['NomF'], $line['ville']);
            $this->allFournisseur[] = $fournisseur;
        }
    }

    public function getAllUsine()
    {
        $db = new Db;
        $db->connectDb();
        $rs = $db->selectQuery("SELECT * FROM usine");

        while ($line = $rs->fetch()) {
            $usine = new Usine($line['numUsine'], $line['nomU'], $line['ville']);
            $this->allUsine[] = $usine;
        }
    }

    public function getAllPuf()
    {
        $db = new Db();
        $db->connectDb();
        $rs = $db->selectQuery("SELECT * FROM puf");

        while ($line = $rs->fetch()) {
            $puf = new Puf($line['numProduit'], $line['numUsine'], $line['numfournisseur'], $line['Quantite']);
            
            $this->allPuf[] = $puf;
        }
    }
}