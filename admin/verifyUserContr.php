<?php

class VerifyUser extends GetUser
{
    private $username;

    public function __construct($username)
    {
        $this->username = $username;
    }

    private function emptyInput()
    {
        return (empty($this->username) ? true : false);
    }

    private function set_message($type, $message)
    {
        $_SESSION[$type] = $message;
    }

    public function userVerify()
    {
        $data = $this->verifyUser($this->username);
        return $data;
    }

    public function confirmPasswordEmail()
    {
        if ($this->emptyInput() == true) {
            $this->set_message("error", "Fields cannot be empty");
        }
        $data = $this->confirmEmailPassword($this->username);
        return $data;
    }
}
