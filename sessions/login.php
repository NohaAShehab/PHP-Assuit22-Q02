<?php


    $data=file("logininfo.txt");
    foreach ($data as $user){
        $info= explode(":",$user);
//        var_dump($info);
        if($info[0]==$_POST["username"] && $info[1]==$_POST["password"]){
            echo "<h1> Logged in successfully </h1>";
            session_start();
            $_SESSION["username"]=$_POST["username"];
            $_SESSION["logged_in"]=true;
            $_SESSION["Welcome_message"]="Good morning teamate";

        }
        else{
            header("Location:login.html");
        }
    }