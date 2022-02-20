<?php

const DB_HOST ="localhost";
const DB_USER= "php_assuit";
const DB_PASSWORD = "Iti123456789_";
const DB_DATABASE = "php_assuit";
try{
    $conn = new mysqli(DB_HOST,
        DB_USER,
        DB_PASSWORD,
        DB_DATABASE, 3306);
    if($conn) {
        # prepared statement  --> mysqli ---> ? placeholder
//        $query = "insert into `php_assuit`.`student`(`std_name`,`email`)values (?,?)";
//        # mysqli--> prepare quert
//        $name="mohamed";
//        $email="mohamed@php";
//        $stmt = $conn->prepare($query);
//        var_dump($stmt);  # query executed successfully, true
//        $stmt->bind_param("ss",$name,$email);
//        $res=$stmt->execute();
//        var_dump($res);
        ######################## update ##################
//        $query = "update student set std_name=? where id=?";
//        $stmt = $conn->prepare($query);
//        $name="updated_prepared";
//        $id=1;
//        $stmt->bind_param("si",$name,$id);
//        $res=$stmt->execute();
//        var_dump($res);
        ######################## delete ########################
//        $query = "delete from student where id=?";
//        $stmt = $conn->prepare($query);
//        $id=1;
//        $stmt->bind_param("i",$id);
//        $res=$stmt->execute();
//        var_dump($res);







        $conn->close();
    }

}
catch (Exception $e){
    echo $e->getMessage();
}
