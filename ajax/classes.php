<?php 
require_once __DIR__. "/../config/dbh.php";

class AjaxComments extends Dbh{
    protected function ajaxCommentShow($product_id){
        $sql = "SELECT * FROM review WHERE product_id = ? LIMIT 2";
        $result = $this->connection()->prepare($sql);
        if (!$result->execute([$product_id])) {
            $result = null;
            exit();
        }
        $details = $result->fetchAll(PDO::FETCH_ASSOC);
        return $details;
    }
}

