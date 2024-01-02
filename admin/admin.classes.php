<?php
require_once __DIR__. "/../config/dbh.php";
class GetUser extends Dbh{
   
    protected function AdminUser($is_admin){
        $sql = "SELECT id, username, email, created_at, (NOW() - last_activity) as seconds_since_activity, fullName, profileImage FROM users WHERE is_admin = ?";
        $stmt = $this->connection()->prepare($sql);
        if (!$stmt->execute([$is_admin])) {
            $stmt = null;
            // header("Location: index.php?errorviewingusers");
            exit();
        }
        
        $details = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // the print_r($details) is actual working and it is getting the users from the database. So we are actually clear here
        // print_r($details);
        return $details;
        
    }
    protected function OrderedProductsAdmin($is_product){
        $sql = "SELECT * FROM cart WHERE is_product = ? ORDER BY date_added ASC";
        $stmt = $this->connection()->prepare($sql);
        if (!$stmt->execute([$is_product])) {
            $stmt = null;
            exit();
        }
        $details = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $details;
    }

    protected function UserProfile($id){
        $sql = "SELECT * FROM users WHERE id = ?";
        $stmt = $this->connection()->prepare($sql);
        if (!$stmt->execute([$id])) {
            $stmt = null;
            exit();
        }
        $details = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $details;
    }

    protected function deleteUser($id){
        $sql = "DELETE FROM users WHERE id = ?";
        $stmt = $this->connection()->prepare($sql);
        if (!$stmt->execute([$id])) {
            $stmt = null;
            exit();
            header("location: index.php?error");
        }

        $stmt = null;
    }

    protected function reveiewComment($id){
        $sql = "SELECT * FROM review WHERE id != ?";
        $stmt = $this->connection()->prepare($sql);
        if (!$stmt->execute([$id])) {
            $stmt = null;
            exit();
        }
        $details = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $details;
    }
    protected function replyComments($id){
        $sql = "SELECT * FROM review WHERE id = ?";
        $stmt = $this->connection()->prepare($sql);
        if (!$stmt->execute([$id])) {
            $stmt = null;
            exit();
        }
        $details = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $details;
    }

    protected function verifyUser($username){
        $sql = "SELECT * FROM users WHERE username = ?";
        $stmt = $this->connection()->prepare($sql);
        if (!$stmt->execute([$username])) {
            $stmt = null;
            exit();
        }
        $details = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $details;
    }
    

    protected function confirmEmailPassword($email){
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $this->connection()->prepare($sql);
        if (!$stmt->execute([$email])) {
            $stmt = null;
            exit();
        }
        $details = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $details;
    }

    // For updating password in the database
    protected function updatePassword($password, $id){
        $sql = "UPDATE users SET password = ? WHERE id = ?";
        $stmt = $this->connection()->prepare($sql);
        if (!$stmt->execute([$password, $id])) {
            $stmt = null;
            exit();
        }

       $stmt = null;
    }
}