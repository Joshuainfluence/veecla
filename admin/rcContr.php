<?php

class RcContr extends GetUser{
    private $id;

    public function __construct($id){
        $this->id = $id;
    }

    public function reviewCommentPost(){
        return $this->reveiewComment($this->id);
    }
}