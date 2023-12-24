<?php 

class OrderProductsContr extends GetUser{
    private $is_product;

    public function __construct($is_product)
    {
        $this->is_product = $is_product;
    }

    public function OrderedProducts2(){
        if ($this->is_product !== 1) {
            exit();
        }
        return $this->OrderedProductsAdmin($this->is_product);
    }
}