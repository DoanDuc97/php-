<?php
include_once "Models/product.php";
include_once "Services/Productmanager.php";

use Services\Productmanager;
use Models\Product;

$productmanager = new Productmanager();
$productmanager->add(new Product("Laptop"));
$productmanager->add(new Product("Mobile"));

$products = $productmanager->getProducts();
foreach ($products as $product) {
    echo $product->getName() ."<br/>";
}
