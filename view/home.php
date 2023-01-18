<?php

include  dirname(__DIR__) . '../app/controller/Controller.php';

$o = new Controller();

// $o->getAllFournisseur();
// echo '<pre>';
// foreach ($o->allFournisseur as $pro) {
//     var_dump( $pro->getNom());
// }
// echo '</pre>';

// ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>
    <h2>Home</h2>
    <ul>
        <li><a href="livraison.php">Lavraison</a></li>
        <li><a href="produit.php"></a>Les Produits</li>
    </ul>
</body>
</html>