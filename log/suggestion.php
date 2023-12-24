
<?php

require_once __DIR__ . "/../config/dbh.php";
require_once __DIR__ . "/../admin/product.classes.php";
require_once __DIR__ . "/../admin/productContr2.php";
$is_product = 0;
$show = new ProductView($is_product);
$products = $show->displayProducts2();

if (isset($_POST['suggestion'])) {
    $name = $_POST['suggestion'];

    if (!empty($name)) {
        foreach ($products as $product) {
            $productName = $product['product_name'];
            $id = $product['id'];
            if (strpos($productName, $name) !== false) {

                echo "<a href='products.php?id=$id' class='suggestion' style='text-decoration: none; color: #fff; :hover:color: #FF1694;'>$productName</a>";
                echo "<style>
            .suggestion:hover {
                    color: #FF1694;
                }
            </style>";
                echo "<br>";
            }
        }
    }
}
