<?php
@$name = $_POST['name'];
@$phone = $_POST['phone'];
@$gender = $_POST['gender'];
@$age = $_POST['age'];
@$date = $_POST['date'];
class Database{
    public $conn;
    public $host="localhost";
    public $db="contactdb";
    public $username="root";
    public $password="";
    public function try($name, $phone, $gender, $age, $date){
        $this->conn=null;
        $this->conn=new PDO("mysql:host".$this->host.";dbname=".$this->db,$this->username,$this->password);
        $sql='use contactdb';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $sql='insert into apttb(name, phone, gender, age, date) values ("'.$name.'","'.$phone.'","'.$gender.'","'.$age.'", "'.$date.'")';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }
}
$pdo=new Database();
$pdo->try($name, $phone, $gender, $age, $date);
echo "Message Sent Successfully";
?>