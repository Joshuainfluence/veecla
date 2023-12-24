<?php
class DisplayReviewProduct extends AjaxDisplayComments{
    private $product_id;

    public function __construct($product_id)
    {
        $this->product_id = $product_id;
    }

    public function displayReviewProducts2(){
        if ($this->product_id == 0) {
            exit();
        }
        return $this->displayReviewProduct($this->product_id);
    }
}