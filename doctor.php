<?php
@$name = $_POST['name'];
@$phone = $_POST['phone'];
@$date = $_POST['date'];
class Database{
    public $conn;
    public $host="localhost";
    public $db="contactdb";
    public $username="root";
    public $password="";
    public function try($name, $phone, $date){
        $this->conn=null;
        $this->conn=new PDO("mysql:host".$this->host.";dbname=".$this->db,$this->username,$this->password);
        $sql='use contactdb';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $sql='insert into doctortb(name, phone, date) values ("'.$name.'","'.$phone.'","'.$date.'")';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }
}
$pdo=new Database();
$pdo->try($name, $phone, $date);
echo "Confirmed Appointment";
?>