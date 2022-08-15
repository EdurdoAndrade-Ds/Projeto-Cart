<?php

use app\classes\Cart;
use app\classes\CartProducts;

session_start();

require '../vendor/autoload.php';

$cartProducts = new CartProducts;

$products = $cartProducts->products(new Cart);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagamento Efetuado</title>
</head>
<body>
        <h1>Compra feita com sucesso de <?php echo number_format($products['total'], 2, ',', '.') ?></h1>
</body> 
</html>