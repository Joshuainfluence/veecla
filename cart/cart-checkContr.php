<?php 

class CartCheckContr extends Cart{
    private $userId;

    public function __construct($userId)
    {
        $this->userId = $userId;
    }

    public function cartChecker(){
        if ($this->userId == 0) {
            header("location: checkout.php? invalid user");
            exit();
        }

        return $this->checkoutDisplay($this->userId);
    }
}