<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//function sum_num(int $z,int $num1=6,int  $num2=100){
//    echo "num1 ={$num1} , num2={$num2} <br>";
//
//    return $num1+$num2;
//}
//
////sum_num(10,5);
////sum_num(10);
//$res=sum_num(4);
//var_dump($res);
////sum_num("iti","php");
///
############### varaiblle len arguments
//function mixedvar(...$args){ # function can be calle with 0 or more param
//    var_dump($args); # array
//    return "finished";
////    echo "test";  # unreachable line
//}
//
//mixedvar();
//mixedvar(10,230,30,[4,5,6]);
#####################call by value, call by ref######################
$value=100;

//function incrementValue($val){
//    $val+=100;
//    echo $val;
//}
//
//incrementValue($value);
//var_dump($value);

//function incrementValue(&$val){
//    $val+=100;
//    echo $val;
//}
//
//incrementValue($value);
//var_dump($value);
##########################
//function sayhello(){
//    echo "<h1> Hello </h1>";
//}
//
//sayhello();

//$hello=function (){
//        echo "<h1> Hello </h1>";
//        return "End";
//    };
//var_dump($hello);
//
//$hello();
//
//var_dump(is_callable($hello));

###################

//$hello=function ($name, $lname="" ){
//    echo "<h1> Hello {$name} </h1>";
//    return "End";
//};
//var_dump($hello);
//$hello("Noha");
//
//var_dump(is_callable($hello));

############################
//$quantity=100;
//$hello=function  ($name, $lname="" ) use ($quantity){
//    var_dump($quantity);
//    # new variable
//    $quantity =1000;
//    echo "<h1> Hello {$name} </h1>";
//
//
//    return "End";
//};
//var_dump($hello);
//$hello("Noha");
//
//var_dump(is_callable($hello));
//var_dump($quantity);

#############
$name="Shymaa";

$greet=function ()use($name){
    echo "<h2> {$name}</h2>";
    # new varaible is defined inside the function scope
    $name="PHP";
    echo $name;
};

$greet();

var_dump($name);






