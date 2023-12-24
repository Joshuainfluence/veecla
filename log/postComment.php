<?php
// the form was submitted to this same page, so we are inserting the comments to the database

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['username'];
    $email = $_POST['email'];
    $profileImage = $_POST['photograph'];
    $productId = $_POST['id'];
    $comments = $_POST['text-comment'];
    $productImage = $_POST['productImage'];

    require_once __DIR__ . "/../config/dbh.php";
    require_once __DIR__ . "/../config/session.php";
    require_once __DIR__ . "/../cart/cart.classes.php";
    require_once __DIR__ . "/../cart/reviewProductContr.php";

   
    $details = new ReviewProductContr($name, $email, $productId, $comments, $profileImage, $productImage);
    echo "success";
    $details->reviewProduct2();
    // header("Location: products.php");
    
   

  

}

?>


