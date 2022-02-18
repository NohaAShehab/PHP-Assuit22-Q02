<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


//$arr= range(0,10,3);
//var_dump($arr);
////
//$arr= range("A","z");#ascii
//var_dump($arr);

//foreach ($arr as $item){
//    echo $item."<br>";
//}
//foreach ($arr as $index=>$item){
//    echo $index." = ".$item."<br>";
//}
####################################
//$arr= ["Ahmed","Mina", "Sara","Shymaa"];
//var_dump($arr);
//$arr[8]="Sandy";  # array ---> associative array
//var_dump($arr);
//
//foreach ($arr as $index=>$item){   # index now is a key
//    echo $index." = ".$item."<br>";
//}
####################
# convert variables to an array
//$name="naha";
//$email="nshehab@iti.gov.eg";
//$myinfo["name"]=$name;
//$myinfo["email"]=$email;
//var_dump($myinfo);
//$info=compact("name","email");
//var_dump($info);
//
//$num=[2,4,6,8,10];
//$num[12]="test";
//var_dump($num);
//$alphas=["a","b","c","d","php","iti"];
//var_dump($alphas);
//$arr3= $alphas+$num;
//var_dump($arr3);
//$info=["name"=>"Ahmed", "id"=>"10"];
////$info2=["firstname"=>"Ahmed", "id"=>"100"];
//$a=range(0,10);
//
//var_dump($info+$a);

//$students=array(
//    1=>array("Ali","IOT"),
//    2=>array("Mostafa","Cloud"),
//    3=>["Noha","Application"]
//);
//var_dump($students);


############ array functions
//$names = array( 'noha', "Fatma", "Dina", "Andrew","Shimaa","suliman" );
//var_dump($names);
//# sort the given array alpha --->
////sort($names); // returns with the are sorted ascending.
////var_dump($names);
//
//rsort($names); // returns with the are sorted descending.
//var_dump($names);

//$prices = array( "meat"=>100, "sugar"=>10, "tea"=>8 );
//asort($prices); # sort the valaues
//var_dump($prices);

//$prices = array( "meat"=>100, "sugar"=>10, "tea"=>8 );
//ksort($prices); # sort the valaues
//var_dump($prices);
//
//$prices = array( "meat"=>100, "sugar"=>10, "tea"=>8 );
//arsort($prices); # sort the valaues
//var_dump($prices);
//
//$prices = array( "meat"=>100, "sugar"=>10, "tea"=>8 );
//krsort($prices); # sort the valaues
//var_dump($prices);


################# user defined sort
### <=>
//function cmp($a, $b)
//{
//    if ($a == $b) {
//        return 0;
//    }
//    return ($a < $b) ? -1 : 1;
//}
//$a = array(3, 2, 5, 6, 1);
////usort($a, "cmp");
////var_dump($a);
////
////shuffle($a);
////var_dump($a);
//var_dump(array_reverse($a));
//


$fruits = ['banana', 'apple',"Kiwi","Orange"];
//var_dump(current($fruits));
//var_dump(next($fruits));
//var_dump(current($fruits));
//var_dump(prev($fruits));
//var_dump(end($fruits));
//var_dump(reset($fruits));

function addhash($str){
    echo $str."#"."<br>";
}

//foreach ($fruits as $f){
//    addhash($f);
//}

//array_walk($fruits,"addhash");
//
//array_walk($fruits,function ($str){
//    echo $str."#"."<br>";});


$b=[5,6,7];
$a=array(5=>"banana","jhkjh"=>"Kiwi");
var_dump(array_merge($a,$b));


