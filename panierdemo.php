<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
    <title>Votre panier</title>
</head>

<body>
    session_start();
    $productId = $_POST['productID'];
    $quantity = $_POST['quantity'];
    <form method="post" action="panierdemo.php">
        <table style="width: 400px">
            <tr>
                <th colspan="5">Votre panier</th>
            </tr>
            <tr>
                <th for="productId">Libellé</th>
                <th for="quantity">>Quantité</th>
                <th for="price">Prix Unitaire</th>
                <th></th>
                <th></th>
            </tr>
            <tr>
                <th>Nouille</th>
                <th><input type='text' value='1' id='One'></th>
                <th>10</th>
                <th><button type="submit" value="add"></button></th>
                <th><button type="submit" value="delete"></button></th>
            </tr>

            <tr>
                <th>Nem</th>
                <th><input type='text' value='2' id='Two'></th>
                <th>5</th>
                <div class="button">
                    <th><button type="submit" value="add"></button></th>
                    <th><button type="submit" value="delete"></button></th>
                </div>

            </tr>
            <tr>
                <th>Boule de coco</th>
                <th><input type='text' value='1' id='Three'></th>
                <th>6</th>
                <th><button type="submit" value="add"></button></th>
                <th><button type="submit" value="delete"></button></th>

            </tr>
            <tr>
                <th>prix total </th>
            </tr>



            function MontantGlobal(){
            $total=0;
            for($i = 0; $i < count($_SESSION['panier']['libelleProduit']); $i++) { $total +=$_SESSION['panier']['qteProduit'][$i] * $_SESSION['panier']['prixProduit'][$i]; } return $total; }