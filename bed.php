<?php
@$name = $_POST['name'];
@$phone = $_POST['phone'];
@$bed = $_POST['bed'];
class Database{
    public $conn;
    public $host="localhost";
    public $db="contactdb";
    public $username="root";
    public $password="";
    public function try($name, $phone, $bed){
        $this->conn=null;
        $this->conn=new PDO("mysql:host".$this->host.";dbname=".$this->db,$this->username,$this->password);
        $sql='use contactdb';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $sql='insert into bedtb(name, phone, bed) values ("'.$name.'","'.$phone.'","'.$bed.'")';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }
}
$pdo=new Database();
$pdo->try($name, $phone, $bed);
echo "Booked Successfully";
?>