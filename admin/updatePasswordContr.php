<?php 

class UpdateUserPasswordContr extends GetUser{
    private $id;
    private $password;

    public function __construct($id, $password)
    {
        $this->id = $id;
        $this->password = $password;
    }
    
    private function emptyInput(){
        return (empty($this->password) ? true : false);
    }

     private function set_message($type, $message){
        $_SESSION[$type] = $message;
    }

    public function passwordUpdate(){
        if ($this->emptyInput() == true) {
            $this->set_message("error", "Fields cannot be empty");
            exit();
        }

        $data = $this->updatePassword($this->password, $this->id);
        return $data;
    }


}