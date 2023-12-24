<?php 
require_once __DIR__. "/../config/dbh.php";
class Cart extends Dbh{

    // we want to store some products into the cart, and we want to know the specific user that stored the product
    // so we have to get both the product id and the user id, which is already running in the session
    // so this this select statement is to select all from the table, where the product is same
    // we are getting the product id, because we need to fetch out the name of the product
    // then the price so as to know
    protected function selectCart($id){
        $sql = "SELECT * FROM products WHERE id = ?";
        $stmt = $this->connection()->prepare($sql);
        if (!$stmt->execute([$id])) {
            $stmt = null;
            header("Location: cart.php?error=connection");
            exit();
        }

        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    // we want to insert into the cart table, the details we already got from the above statement
    // as to which the user id is already set in the session

    protected function AddtoCart($product_name, $product_price, $product_quantity, $users_id, $product_id, $product_image){
        $sql = "INSERT INTO cart (product_name, product_price, product_quantity, users_id, product_id, product_image) VALUES (?, ?, ?, ?, ?, ?);";
        $stmt = $this->connection()->prepare($sql);
        if (!$stmt->execute([$product_name, $product_price, $product_quantity, $users_id, $product_id, $product_image])) {
            $stmt = null;
            header("Location: cart.php?error=inserting error");
            exit();
        }

        $stmt = null;
    }

    protected function checkoutDisplay($userId){
        $sql = "SELECT * FROM cart WHERE users_id = ?";
        $stmt = $this->connection()->prepare($sql);
        if (!$stmt->execute([$userId])) {
            $stmt = null;
            header("Location: checkout.php? failed to display");
            exit();
        }

        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
        
    }

    protected function deleteProfileCart($id){
        $sql = "DELETE FROM cart WHERE id = ?";
        $stmt = $this->connection()->prepare($sql);
        if (!$stmt->execute([$id])) {
            $stmt = null;
            header("location: ../log/profile.php");
            exit();
        }

        $stmt = null;
    }

    protected function reviewProduct($name, $email, $product_id, $comments, $photo, $productImage){
        $sql = "INSERT INTO review (name, email, product_id, comments, profilePhoto, productImage) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->connection()->prepare($sql);
        if (!$stmt->execute([$name, $email, $product_id, $comments, $photo, $productImage])) {
           $stmt = null;
           exit();
        }

        $stmt = null;
    }

    protected function displayReviewProduct($product_id){
        $sql = "SELECT * FROM review WHERE product_id = ? LIMIT 2";
        $stmt = $this->connection()->prepare($sql);
        if (!$stmt->execute([$product_id])) {
            $stmt = null;
            exit();
        }
        $details = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $details;
    }

   
}