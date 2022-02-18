<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
try {
    # w mode,if file not exist s--> will ---> create it
    # file exists ---> remove all the file content
    $file_resource = fopen("list.txt", "w");
    var_dump($file_resource);
    var_dump(is_resource($file_resource));
    if(is_resource($file_resource)){
        $res=fwrite($file_resource, "PHP is simple");
        var_dump($res);  # no of bytes written to the file

        fclose($file_resource);
//
    }
}catch (Exception $e){
    echo $e->getMessage();  # access function getmessage , Exception object
    # calll function with name getMessage
}
