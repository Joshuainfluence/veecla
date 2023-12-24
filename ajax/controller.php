<?php 

class AjaxCommentsContr extends AjaxComments{
    private $product_id;

    public function __construct($product_id)
    {
        $this->product_id = $product_id;
    }

    public function ajaxViewComments(){
        return $this->ajaxCommentShow($this->product_id);
    }
}