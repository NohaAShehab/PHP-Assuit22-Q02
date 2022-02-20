<?php

$dsn = 'mysql:dbname=php_assuit;host=127.0.0.1;port=3306;'; #port number
$user = 'php_assuit';
$password = 'Iti123456789_';
try {
    $conn = new PDO($dsn, $user, $password);
    var_dump($conn);

    if($conn){
        #################### insert
//    $ins_query="insert into student(std_name, email) values (:myname,:email);";
//    $stmt=$conn->prepare($ins_query);
//    $name="uuuu";
//    $email="uuuu@php";
//    $stmt->bindParam(":email",$email);
//    $stmt->bindParam(":myname",$name);
//    $stmt->execute();
//    echo $stmt->rowCount();
        ##################### update
//        $upd_query="update student set std_name=:myname , email=:email where id=:id";
//        $stmt=$conn->prepare($upd_query);
//        $name="updated__dfsdf";
//        $email="jkhjhg@php";
//        $id=10;
//        $stmt->bindParam(":email",$email);
//        $stmt->bindParam(":myname",$name);
//        $stmt->bindValue(":id",14);
//        $stmt->execute();
//        echo $stmt->rowCount();
        ###################### delete
//        $del_query="delete from student  where id=:id";
//        $stmt=$conn->prepare($del_query);
//        $id=10;
//        $stmt->bindParam(":id",$id,PDO::PARAM_INT);
//        $stmt->execute();
//        echo $stmt->rowCount();

        ############## transaction

//        $ins_query="insert into student(std_name, email) values (?,?);";
//        $stmt=$conn->prepare($ins_query);
//        $name="transaction";
//        $email="transaction@php";
//        $conn->beginTransaction();
//        $stmt->execute([$name,$email]);
//        $stmt->execute([$name,$email]);
//        $conn->commit();


        $ins_query="insert into student(std_name, email) values (:myname,:email);";
        $stmt=$conn->prepare($ins_query);
        $name="transaction";
        $email="transaction@php";
        $name2="yyyyyy";
        $email2="yyy@php";
        $conn->beginTransaction();
        $stmt->bindParam(":myname",$name);
        $stmt->bindParam(":email",$email);
        $stmt->execute();

        $stmt->bindParam(":myname",$name2);
        $stmt->bindParam(":email",$email2);
        $stmt->execute();
        $conn->commit();






    }


}catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
