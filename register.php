<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
class Database{
    public $conn;
    public $host="localhost";
    public $db="contactdb";
    public $username="root";
    public $password="";
    public function try($name, $email, $phone){
        $this->conn=null;
        $this->conn=new PDO("mysql:host".$this->host.";dbname=".$this->db,$this->username,$this->password);
        $sql='use contactdb';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $sql='insert into registertb(name, email, phone) values ("'.$name.'","'.$email.'","'.$phone.'")';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }
}
$pdo=new Database();
$pdo->try($name, $email, $phone);
echo "Registered Successfully";
?>