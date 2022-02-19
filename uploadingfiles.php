<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
try{

    echo trim($_POST["desc"],'`');


    var_dump($_REQUEST);
    var_dump($_FILES);
//    $filename=$_FILES["file"]["name"];
//
//    $file_tmp=$_FILES["file"]["tmp_name"];
////    $ext=explode('.',$_FILES['file']['name']);
////    var_dump($ext);
////    $file_ext=strtolower(end($ext));
//
//    $info=pathinfo($_FILES["file"]["name"]);
//    var_dump($info);
//    var_dump($info["extension"]);
//
//
////    $command="cat ".$file_tmp;
////
////    $res= `$command`;
////    var_dump($res);
//
    move_uploaded_file($_FILES["file"]["tmp_name"][0],"files/".$_FILES["file"]["name"][0]);
    move_uploaded_file($_FILES["file"]["tmp_name"][1],"files/".$_FILES["file"]["name"][1]);


}catch (Exception $e){
    echo $e->getMessage();
}