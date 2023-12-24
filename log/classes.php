<?php

class AjaxDisplayComments extends Dbh
{
    protected function displayReviewProduct($product_id)
    {
        $sql = "SELECT * FROM review WHERE product_id = ? LIMIT 2";
        $stmt = $this->connection()->prepare($sql);
        if (!$stmt->execute([$product_id])) {
            $stmt = null;
            exit();
        }
        $details = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $details;
    }
}
