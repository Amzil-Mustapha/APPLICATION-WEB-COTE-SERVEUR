<?php
include 'Controller.php';

$o = new Controller();

$arrF = [];
$arrAjax = [];

$o->getAllFournisseur();

foreach ($o->allFournisseur as $pro) {
    $arrF[] = ['nom' => $pro->getNom(), 'ville' => $pro->getVille(), 'num' => $pro->getNum()];
}


if (isset($_GET['str'])) {
    $arrAjax[] = $arrF;
    $arrAjax[] = $_GET['str'];
    print_r(json_encode( $arrAjax));
}
