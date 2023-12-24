<?php 
require_once __DIR__. "/../config/session.php";
require_once __DIR__. "/../config/dbh.php";
require_once __DIR__. "/cart.classes.php";
require_once __DIR__. "/cartContr.php";
require_once __DIR__. "/cartSelectContr.php";
$productId = $_GET['id'];
$usersId = $_SESSION['id'];

$details = new SelectCartContr($productId);
header("location: checkout.php?a success");
$rows = $details->selectcart2($productId);

// print_r($rows);

foreach ($rows as $row) {
    $product_quantity = 1;
    $productId = $row['id'];
    $product_name = $row['product_name'];
    $product_price = $row['product_price'];
    $product_image = $row['product_image'];
    
    $data = new CartContr($product_name, $product_price,$product_quantity, $usersId, $productId, $product_image );
    return $data->addCart2();
    
}

