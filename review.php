<?php

####################### mysqli-proceduar;
const DB_HOST ="localhost";
const DB_USER= "php_assuit";
const DB_PASSWORD = "Iti123456789_";
const DB_DATABASE = "php_assuit";

try{

    ###
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD,
        DB_DATABASE, 3306);

//    var_dump($conn);

    if($conn){
        #insert
//        $inst_query="insert into student(std_name,email) value ('test','test')";
//        $res=mysqli_query($conn,$inst_query);
//        var_dump($res); # true
//        echo mysqli_insert_id($conn);

        # select
//        $select_query="select * from student";
//        $res=mysqli_query($conn,$select_query);
//        var_dump($res); # #### result object
//        var_dump($res);
//        # get data
////        $rows=mysqli_fetch_all($res,MYSQLI_ASSOC);
////        var_dump($rows);
//        # one by one
//        $row=mysqli_fetch_assoc($res);
//        var_dump($row);
//        $row=mysqli_fetch_object($res);
//        var_dump($row);
//        $row=mysqli_fetch_row($res);
//        var_dump($row);

        ############## update
//        $update_query="update student set std_name='break' where id=9";
//        $res=mysqli_query($conn,$update_query);
//        var_dump($res);
//        echo mysqli_affected_rows($conn);
        ########### delete
        $del_query="delete from student where id=9";
        $res=mysqli_query($conn,$del_query);
        var_dump($res);
        echo mysqli_affected_rows($conn);






    }



}catch (Exception $e){
    echo $e->getMessage();
}
