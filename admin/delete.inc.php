<?php 
require_once __DIR__. "/product.classes.php";
require_once __DIR__. "/delete.classes.php";
$id = $_GET['id'];
$stmt = new DeleteProduct($id);
header("location: addproducts.php?m=1");
return $stmt;
