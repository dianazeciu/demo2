<?php

use Ilbah\Shop\Category;
use Ilbah\Shop\Chocolate;
use Ilbah\Shop\Juice;

require_once "vendor/autoload.php";

$category = new Category('Sweets');
$category2 = new Category('Drinks');
$cola = new Juice(1, 1, 'Coca-Cola', 7.5, $category2);
$fanta = new Juice(2,1, 'Fanta',7.8, $category2);
$milka = new Chocolate( 3, 90, 'Milka Caramel',  6.4, $category);
$africana = new Chocolate(4, 95, 'Africana Coconut',  3.7, $category);

$products = [
    $cola->getId()=>$cola,
    $fanta->getId()=>$fanta,
    $milka->getId()=>$milka,
    $africana->getId()=>$africana
];