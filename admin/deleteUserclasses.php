<?php
class DeleteUser extends GetUser{
    private $id;
    
    public function __construct($id)
    {
        $this->id = $id;
        if ($this->deleteUser($this->id)) {
            header("Location: index.php");
            exit();
        }
    }
}