<?php 

class ViewContr extends ViewProduct{
    private $id;

    public function __construct($id)
    {
        $this->id = $id;
        
    }

    // this method is created to display product,if the id is not equal to 0
    public function displayItem(){
        if ($this->id == 0) {
            exit();
        }

        $data = $this->ViewProduct($this->id);
        return $data;
    }


}