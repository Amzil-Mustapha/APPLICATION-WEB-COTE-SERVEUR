<?php
include 'Controller.php';


$o = new Controller();

$arrP = [];


$o->getAllPuf();
$o->getAllProduit();

foreach ($o->allPuf as $ele) {

    if (in_array(strval($ele->getNumF()), $_GET['arrNumFour']) && in_array(strval($ele->getNumU()), $_GET['arrNumUsine']) ) {
    
        
        foreach ($o->allProduits as $e) {
        
        if ($ele->getNumP() == $e->getNum()) {

            $arrP[] = ['nom' => $e->getNom(), 'quantite' => $ele->getQuantite()];
        }
        }
    } 
} 
    
print_r(json_encode( $arrP));