<?php 

class DeleteCartContr extends Cart{
    private $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function Deleting(){
       if ($this->deleteProfileCart($this->id)) {
        // header("../log/profile.php");
        exit();
       }
    }
}