<?php
//$drivers=PDO::getAvailableDrivers();
//echo "<pre>";
//print_r($drivers);
//
    class Database{
    private $host="localhost";
    private $dbuser="root";
    private $dbpass="";
    private $dbname="laravel01";
    public $conn;
    public function connection(){
        $this->conn=null;
        try {
            $this->conn=new PDO("mysql:host=$this->host;dbname=$this->dbname",$this->dbuser,$this->dbpass);
            $this->conn->setAttribute (PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
           // echo "connected";
        } catch (PDOException $ex) {
            
            echo"failed:".$ex->getMessage();
        }
        return $this->conn;  
    }
    
  }
// $c= new Database;
// $c->connection()
?>