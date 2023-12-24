<?php 
require_once __DIR__ . "/../config/dbh.php";
class ViewProduct extends Dbh{
    protected function ViewProduct($id){
        $sql = "SELECT * FROM products WHERE id = ?";
        $stmt = $this->connection()->prepare($sql);
        if (!$stmt->execute([$id])) {
            $stmt = null;
            header("Location: ../log/index.php?error=problemviewingproduct");
            exit();
        }

        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
}