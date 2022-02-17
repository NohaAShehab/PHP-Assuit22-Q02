<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//
//    $x =10.0;
//    var_dump($x);
//    # convert x to string
//    $x=(int)$x;
//    var_dump($x);
//
//
//$x ="Ahmed";
//var_dump($x);
//$x=(int)$x;
//var_dump($x);
    
############33 var of var
//$x="iti";
//echo $x."<br>";
//$iti="Information Tech Institute";
//
//echo $$x;  # $ iti

//$x=10;
//$y="10";
//var_dump($x==$y);
//var_dump($x===$y);

//$y=200;
//$x=200;
//var_dump($x <=>$y);

################ Reference operator
//$a=10;
//$b=&$a; # is alias  ===>
//var_dump($a, $b);
//
//$a=1000;
//var_dump($a, $b);
//


//$x=@(5/0);
//var_dump($x);
//
//
//@(var_dump($z));


//$content=`ls -l`;  #exceute commnad on the os
//var_dump($content);
//
//$s="10";
//echo gettype($s);
//
//var_dump(is_numeric($s));



##############
//$x=10;
//var_dump(isset($x));  # variable contain val --> True
//var_dump(empty($x)); # var --> not empty --> false
##############
//$x=false;
//var_dump(isset($x));  # variable contain val --> True
//var_dump(empty($x)); # var -->  empty --> true
//# flasy values "", null, [], 0, false
//##################
//$x="";
//var_dump(isset($x));  # variable contain val --> True
//var_dump(empty($x)); # var -->  empty --> true
//# flasy values "", null, [], 0, false

##################
//$x;
//var_dump(isset($x));  # variable contain val --> false
//var_dump(empty($x)); # var -->  empty --> true
//# flasy values "", null, [], 0, false
//#################
//$x=null;
//var_dump(isset($x));  # variable contain val --> false
//var_dump(empty($x)); # var -->  empty --> true
//# flasy values "", null, [], 0, false
##############
//var_dump(isset($x));
//var_dump(empty($x));
//
//$n=10;
//unset($n);
//var_dump($n);


//function test(){
//    echo "abc";
//}
//@(var_dump(is_callable(test)));  # check if the var is callable or not


for($i=0;$i<10;$i++){
    if($i==4){
        exit();
    }
    echo "<br>".$i;
}

echo "<br> after the loop";







