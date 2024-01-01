<?php 

class VerifyUser extends GetUser{
    private $username;

    public function __construct($username)
    {
        $this->username = $username;
    }

    public function userVerify(){
       $data = $this->verifyUser($this->username);
       return $data;
    }

    public function confirmPasswordEmail(){
        $data = $this->confirmEmailPassword($this->username);
        return $data;
    }


}