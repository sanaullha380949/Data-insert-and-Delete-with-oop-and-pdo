<?php

class User {

    private $conn;
    private $table_name = "users";
    public $user_id;
    public $user_name;
    public $user_phone;
    public $user_insert_date;
    public $user_update_date;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function userAdd($user_name, $user_phone) {
        try {
            $sql = "INSERT INTO users(user_name,user_phone)VALUES (:n,:p)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindparam(":n", $user_name);
            $stmt->bindparam(":p", $user_phone);
            $insert = $stmt->execute();
            if (!$insert) {
                return FALSE;
            }
        } catch (PDOException $ex) {
            echo "Error:" . $ex->getMessage();
        }
        return TRUE;
    }

    public function selectAllUser(){
        try {
            $sql = "SELECT * FROM users";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            // fetch all data
            $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if($stmt->rowCount()>0){
                return $users;
            }
            
            return FALSE;
            
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }
    
    public function deleteUser($id) {
        try {
            $sql = "DELETE FROM users WHERE user_id = $id ";
            $stmt = $this->conn->prepare($sql);
            $delete = $stmt->execute();
            
            if($delete){
                return true;
            }
            
            return FALSE;
            
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }
    
    public function redirect($url) {
        header("Location:$url");
    }

}

?>