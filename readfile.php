<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
try {
    $file_resource = fopen("names.txt", "r");
    var_dump($file_resource);
    var_dump(is_resource($file_resource));
    if(is_resource($file_resource)){
        # read file content
        # get file size
        $f_size= filesize("names.txt");
        var_dump($f_size); #no bytes in the file

        #read file content into one string .
//        $data=fread($file_resource,$f_size);
        $data=fread($file_resource,15);
        var_dump($data);

        # close file
        fclose($file_resource);

    }
}catch (Exception $e){
    echo $e->getMessage();  # access function getmessage , Exception object
    # calll function with name getMessage
}
