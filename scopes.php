<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
#################################### Local scope ########################
//function test(){
//        #any variable defined in the local scope of the function cannot be accessed
//        # outside the function
//        $name ="Noha";
//        echo 'My first function';
//        echo "<br>".$name;
//
//    }
//
//    test();
//
//echo "<br>".$name;


#################################### global scope scope ########################
# variable defined in the global scope, can be accessed from anywhere in the script
# except the the function local scope
//$course= "PHP";
//echo $course."<br>";
//print($course);
//var_dump($course);
//
//# try to access the variable from inside the function
////function testingscope(){
////    # access the global variable from inside a function
////    #
////    echo $course;
////}
//function testingscope(){
//    # access the global variable from inside a function
//    global $course;
//    echo $course;
//    $course = "PHP Course";
//}
//testingscope();
//var_dump($course);


//#################################### parameter scope ########################
//
//function calsum($x, $y){  # variables defined in the function parameter can be accessed only inside the fun.
//    echo "x= ".$x." and y= ".$y."<br>";
//    return $x+$y;
//}
//
//$res=calsum(10,12);
//var_dump($res);
//
//var_dump($x);
################################### static scope ######################
//function countcalls(){
//    static $count = 0;
//    $count= $count +1;
//    echo "No of calls = ".$count."<br>";
//}
//countcalls();
//countcalls();
//countcalls();
//countcalls();
//#### $count can be accessed through calling countcall function.
//var_dump($count);

################################### constant scope ######################
//const year= 2022; # can be accessed anywhere in the script
//define("iti","Information Technology Institute");
//
//var_dump(year);
//
//function testconstant(){
//    var_dump(year);
//    var_dump(iti);
//}
//testconstant();

################################### Super global variable scope ######################
# can be accessed and modified from inside, and outside function
# superglobal course are associative array
//$_GET["course"]="PHP";
//
//var_dump($_GET["course"]);
//
//function test(){
//    var_dump($_GET["course"]);
//    $_GET["course"]="Laravel";
//}
//
//test();
//var_dump($_GET["course"]);
###############################################

$x="iti";
$y="test";
echo $x,$y;  # output the value of object -->
echo"<br>";
$res =print($x); # return 1
var_dump($res);

$x_arr=[4,5,6,7];
echo json_encode($x_arr);
var_dump($x_arr);
print_r($x_arr);

