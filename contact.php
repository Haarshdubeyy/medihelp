<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$comments = $_POST['comments'];
class Database{
    public $conn;
    public $host="localhost";
    public $db="contactdb";
    public $username="root";
    public $password="";
    public function try($name, $email, $phone, $comments){
        $this->conn=null;
        $this->conn=new PDO("mysql:host".$this->host.";dbname=".$this->db,$this->username,$this->password);
        $sql='use contactdb';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $sql='insert into contacttb(name, email, phone, comments) values ("'.$name.'","'.$email.'","'.$phone.'","'.$comments.'")';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }
}
$pdo=new Database();
$pdo->try($name, $email, $phone, $comments);
echo "Message Sent Successfully";
?>