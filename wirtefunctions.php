<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
try{

    ### fileputcontent
//    file_put_contents("info.txt","Good morning");

//    $data=implode("",
//        file("info.txt",FILE_SKIP_EMPTY_LINES));
//    var_dump($data);
//    ############## create new file 000> without the data
//    file_put_contents("modifedfile",
//        array_filter(file("info.txt")));
//    $data= file("info.txt");
//    var_dump($data);
//    foreach ($data as $i=>$line){
//        if ($line==""|| $line==PHP_EOL){
//            unset($data[$i]);
//        }
//    }
//    var_dump($data);
//    file_put_contents("info.txt",$data);

//    var_dump(filetype("info.txt"));
//    var_dump(filetype("test"));
//
//    var_dump(file_exists("info.txt"));
//    unlink("info.r");

    $res=copy("names.txt", "newcopied.txt");
    var_dump($res);



}catch (Exception $e){
    echo $e->getMessage();
}