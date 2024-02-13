<?php
$email = $_POST['email'];
class Database{
    public $conn;
    public $host="localhost";
    public $db="contactdb";
    public $username="root";
    public $password="";
    public function try($email){
        $this->conn=null;
        $this->conn=new PDO("mysql:host".$this->host.";dbname=".$this->db,$this->username,$this->password);
        $sql='use contactdb';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $sql='insert into forgottb(email) values ("'.$email.'")';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }
}
$pdo=new Database();
$pdo->try($email);
echo "Email Sent";
