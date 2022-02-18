<?php


try{
    $file_object= fopen("names.txt","r");
    # open file the begining
    if(is_resource($file_object) && is_readable("names.txt")){
        $rows=[];
        $data=fgets($file_object); # read one line from the file
        var_dump($data);
        $data=fgets($file_object); # read one line from the file
        var_dump($data);
        $data=fgets($file_object); # read one line from the file
        var_dump($data);

        $res=ftell($file_object);  # the position of the cursor
        var_dump($res);
//        while (!feof($file_object)){
//            $rows[]=fgets($file_object);
//        }
//
//        var_dump($rows);
            ######################################
        # specify line length
//        $line = fgetcsv($file_object,4);
//        var_dump($line);
//        $line = fgetcsv($file_object,4);
//        var_dump($line);
//        $line = fgetcsv($file_object,4);
//        var_dump($line);
////        rewind($file_object); # move the file cursor to the begining
////        # of the file
//        fseek($file_object,15);
//        Rana, R , n,
//        while (!feof($file_object)){
//            $rows[]=fgetcsv($file_object,"4","a");
//        }
//        var_dump($rows);



        fclose($file_object);
    }

    #########################file function###########################
    # read file content into an array
//    if(is_readable("names.txt")){
//    $data = file("names.txt");
//    var_dump($data);
//}
########################read ###########################
    # open file ---> output file content to the browser
//    readfile("names.txt");

//    $res=file_get_contents("names.txt");
//    var_dump($res);  # read file into one string


}catch (Exception $e){
    echo $e->getMessage();
}