<?php

####################### mysqli-oop;
const DB_HOST ="localhost";
const DB_USER= "php_assuit";
const DB_PASSWORD = "Iti123456789_";
const DB_DATABASE = "php_assuit";

####################
try{
    $conn=new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE,3306);
    var_dump($conn);

    if($conn){
        #use the object to call mysqli functions
//        $inst_query="insert into student(std_name,email) value ('oop','oop')";
//        $res= $conn->query($inst_query);
//        var_dump($res); #true
//        if($res){
//            echo "<h1>".$conn->insert_id."</h1>";
//        }




        #### select
//        $select_query="select * from student";
//        $res= $conn->query($select_query);
//        var_dump($res); #result object
//
////        $data= $res->fetch_all(MYSQLI_ASSOC);
////        var_dump($data);
//
//        $row=$res->fetch_assoc();
//        var_dump($row);
//        $row=$res->fetch_object();
//        var_dump($row);
//        $row=$res->fetch_row();
//        var_dump($row);

        ################## update
//        $update_query="update student set std_name='updated review' where id=20";
//        $res= $conn->query($update_query);
//        var_dump($res); # true or false
//        echo $conn->affected_rows;

        ########################  delete ####
        $del_query="delete from student where id=21";
        $res= $conn->query($del_query);
        var_dump($res); # true or false
        echo $conn->affected_rows;











    }
}catch (Exception $e){
    $e->getMessage();
}