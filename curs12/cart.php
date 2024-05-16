<?php
session_start();

use Ilbah\Shop\Cart;

require_once "index.php";
$cart = New Cart();

if(isset($_SSESION['cart'])){
    foreach($_SSESION['cart'] as $productKey) {
   $cart->add($products[$productKey]);
    }
};

$cart->add($products[$_GET['product']]);

$_SSESION['cart'] [] = $_GET['product'];
dump($_SSESION['cart'], $cart);
