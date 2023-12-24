<?php
// fetch_comments.php
require_once __DIR__ . '/../config/dbh.php';
require_once __DIR__ . "/../cart/displayReviewContr.php";

if (isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];
    $data = new DisplayReviewProduct($product_id);
    $comments = $data->displayReviewProducts2($product_id);
    echo json_encode($comments);
}
?>
