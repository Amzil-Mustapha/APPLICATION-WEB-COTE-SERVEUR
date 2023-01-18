<?php
include 'Controller.php';

$o = new Controller();

$arrU = [];
$arrAjax = [];

$o->getAllUsine();

foreach ($o->allUsine as $pro) {
    $arrU[] = ['nom' => $pro->getNom(), 'ville' => $pro->getVille(), 'num' => $pro->getNum()];
}


if (isset($_GET['str'])) {
    $arrAjax[] = $arrU;
    $arrAjax[] = $_GET['str'];
    print_r(json_encode( $arrAjax));
}
