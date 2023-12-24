<?php

class ReviewProductContr extends Cart
{
    private $name;
    private $email;
    private $product_id;
    private $comments;
    private $photo;
    private $productImage;


    public function __construct($name, $email, $product_id, $comments, $photo, $productImage)
    {
        $this->name = $name;
        $this->email = $email;
        $this->product_id = $product_id;
        $this->comments = $comments;
        $this->photo = $photo;
        $this->productImage = $productImage;
    }

    public function reviewProduct2()
    {
        if ($this->emptyInput() == true) {
            header("Location: ../log/products.php?error=emptyinput");
            exit();
            
        }
        return $this->reviewProduct($this->name, $this->email, $this->product_id, $this->comments, $this->photo, $this->productImage);
        // header("location: ../log/products.php?commentposted");
    }

    protected function emptyInput()
    {
        if (empty($this->name) || empty($this->email) || empty($this->product_id) || empty($this->comments) || empty($this->photo)) {
            return true;
        } else {
            return false;
        }
    }

    
 
}
