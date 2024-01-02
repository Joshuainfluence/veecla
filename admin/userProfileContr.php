<?php

class UserProfileContr extends GetUser
{
    private $id;
    

    public function __construct($id)
    {
        $this->id = $id;
        
    }


    public function showUserProfile()
    {

        if ($this->id == 0) {
            exit();
        }
        // header("Location: ../log/profile.php");
        $data = $this->UserProfile($this->id);
        return $data;
    }
    public function replyUsers()
    {

        if ($this->id == 0) {
            exit();
        }
        // header("Location: ../log/profile.php");
        $data = $this->replyComments($this->id);
        return $data;
    }

    // for updating password in the database

   
}
