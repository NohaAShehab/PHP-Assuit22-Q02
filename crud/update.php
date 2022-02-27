<?php

var_dump($_GET);
#### new data
var_dump($_POST);


$dsn = 'mysql:dbname=php_assuit;host=127.0.0.1;port=3306;'; #port number
$user = 'php_assuit';
$password = 'Iti123456789_';
//var_dump($_GET);

### get the record form the query string
//$id=(int)$_GET["id"];
$updated_name=$_POST["std_name"];
$updated_email=$_POST["email"];
$id=(int)$_POST["id"];

try{
    $db = new PDO($dsn, $user, $password);
    if($db){
      $update_query="update student set std_name=:myname, email=:email where id=:id";
      $stmt=$db->prepare($update_query);
      $stmt->bindParam(":myname",$updated_name);
      $stmt->bindParam(":email",$updated_email);
      $stmt->bindParam(":id",$id);
      $res=$stmt->execute();
//      if($stmt->rowCount() >0){
////          echo "Updated successfully";
//          header("Location:student_index.php");
//
//
//      }
        if($res){
            header("Location:student_index.php");
        }

    }
}catch (Exception $e){
    echo $e->getMessage();
}
?>