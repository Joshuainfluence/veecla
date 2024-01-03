<?php 

class UpdateUserPasswordContr extends GetUser{
    private $password;
    private $id;

    public function __construct($password, $id)
    {
        $this->password = $password;
        $this->id = $id;
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