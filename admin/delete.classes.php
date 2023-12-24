<?php

class DeleteProduct extends Product
{
    private $id;

    public function __construct($id)
    {
        $this->id = $id;
        if ($this->deleteProduct($this->id)) {
            header("Location: addProducts.php");
            exit();
        }
    }
}


