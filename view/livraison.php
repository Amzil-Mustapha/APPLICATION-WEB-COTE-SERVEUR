<?php
include  dirname(__DIR__) . '../app/controller/Controller.php';

$o = new Controller();

$o->getAllVille();

$arr = [];
foreach ($o->allVille as $pro) {
    if (!in_array($pro[0], $arr)) {
        $arr[] = $pro[0];
    }
}










?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Livraison</title>
</head>
<body>
    <h1>Livraison</h1>
    <pre>
<form  method="get">
    Ville:                         <select name="ville" onchange="villeOption(this.value)">
        <option value="default">Villes</option>
        <?php foreach ($arr as $ele) {
            echo "<option value='{$ele}'>".ucwords($ele)."</option>";
        }?>
    </select>

    Fournisseur:                   <select name="fournisseur" id="four">
        <option value="default">Fournisseurs</option></select>

    Usine:                         <select name="usine" id="usine">
        <option value="default">Usines</option></select>

    Produit:                       <select name="produit" onchange="funProduitSelect(this.value)" id="Produit" >
        <option value="default">Produits</option></select>

    Quantité:                      <input type="text" name="quat" id="quat" >


                    <button type="submit" name="submit">Validé</button>
</form>
    </pre>

    <script src="../src/js/jquery-3.6.3.min.js"></script>
    <script src="../src/js/script.js"></script>
</body>
</html>