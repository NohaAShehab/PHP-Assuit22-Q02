<?php

$dsn = 'mysql:dbname=php_assuit;host=127.0.0.1;port=3306;'; #port number
$user = 'php_assuit';
$password = 'Iti123456789_';
### get the record form the database
$id=(int)$_GET["id"];

#### connect to the datbase and get record with id
try{
    $db = new PDO($dsn, $user, $password);
    if($db){
        $query="delete from student where id=:sid";
        $stmt=$db->prepare($query);
        $stmt->bindParam("sid",$id);
        $res=$stmt->execute();
        if($stmt->rowCount()){
            header("Location:student_index.php");
        }
    }
}catch (Exception $e){
    echo $e->getMessage();
}
?>