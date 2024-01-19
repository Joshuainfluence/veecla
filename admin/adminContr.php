<?php

class AdminContr extends GetUser
{
    private $is_admin;

    public function __construct($is_admin)
    {
        $this->is_admin = $is_admin;
    }

    protected function is_admin_check()
    {
        $this->is_admin == 0;
    }



    // this function is working so well 
    public function display(){
        if ($this->is_admin !== 0) {          
            exit();
        }
       
        $data = $this->AdminUser($this->is_admin);
        return $data;
       
    }

    // for displaying the total user on the overview page
    public function UserTotal(){
        if ($this->is_admin !== 0) {
            exit();
        }

        $data = $this->totalUsers($this->is_admin);
        return $data;
    }
}


// So my fucking question goes like this
// When i call the function 
// protected function cond(){$this->is_admin = 0} and the public function showdetails(){if($this->cond()){ exit();}$this->AdminUser($this->is_admin);} the print_r($details) on the admin.classes.php will work, but if i do it the other way it won't work
// So i think the problem is coming from the adminContr.php file