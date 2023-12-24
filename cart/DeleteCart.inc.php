<?php 
require_once __DIR__. "/cart.classes.php";
require_once __DIR__. "/cartDeleteContr.php";
$id = $_GET['id'];
$cart = new DeleteCartContr($id);

$stmt = $cart->Deleting($id);
header("Location: ../log/profile.php?m=1");

return $stmt;



