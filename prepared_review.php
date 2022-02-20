<?php

const DB_HOST ="localhost";
const DB_USER= "php_assuit";
const DB_PASSWORD = "Iti123456789_";
const DB_DATABASE = "php_assuit";

try {

    ###
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD,
        DB_DATABASE, 3306);
    if($conn){
        # ? placeholder
        $inst_query="insert into student(std_name,email) value (?,?)";
        $inst_stmt =mysqli_prepare($conn,$inst_query);
//        var_dump($inst_stmt);
        $name="iti";
        $email="php";
        mysqli_stmt_bind_param($inst_stmt,"ss",$name,$email);
        $res=mysqli_stmt_execute($inst_stmt);
        var_dump($res);
        echo mysqli_insert_id($conn);

    }

}catch (Exception $e){
    echo $e->getMessage();
}
