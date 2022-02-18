<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
try {
    # a mode,if file not exists--> will ---> create it
    # file exists ---> append at the end of the file content
    $file_resource = fopen("list.txt", "a");
    var_dump($file_resource);
    var_dump(is_resource($file_resource));
    if(is_resource($file_resource)){
        $res=fwrite($file_resource, "New line".PHP_EOL);
        var_dump($res);  # no of bytes written to the file

        fclose($file_resource);
    }
}catch (Exception $e){
    echo $e->getMessage();  # access function getmessage , Exception object
    # calll function with name getMessage
}
