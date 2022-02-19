<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//$txt="noha";
//printf("[%'#10s]\n",$txt);
//printf("[%'#10s]\n",$txt);
//$InputArray = array('OS','Application','Track');
//var_dump(implode(" ",$InputArray));
//var_dump(join(" ",$InputArray));


//$str="I love coffee so much";
//$arrstr=explode(" ",$str,2);
//var_dump($arrstr);

//$string = "My name is Noha, I works at ITI";
//$tok = strtok($string, " ");
//while ($tok!==false){
//    echo "Word=$tok<br/>";
//    $tok = strtok(" \n\t");
//}

//$name="noha";
//var_dump($name[2]);

//$var1 = "I am noha";
//$var2 = "I Am nohartyrty";
//var_dump(strcasecmp($var1,$var2));
////if (strcmp($var1, $var2) !== 0) {
////    echo '$var1 is not equal to $var2 in
////a case sensitive string comparison';
////}
//
//$name="Ahmed";
//$res=md5($name);
//var_dump($res);



//$input = array('A: XXX', 'B: ZZZ', 'C: AAA');
//$input=substr_replace($input, 'YYY####', 3, 2);
//var_dump($input);
//
//$txt="<h1> test </h1>";
//var_dump($txt);
//echo $txt;
//$res=htmlspecialchars($txt);
//echo $res;
//var_dump($res);


############### REGEX
//$email='nshehab@iti.gov.eg';
//$pattern="/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix";
//$res=preg_match($pattern,$email);
//var_dump($res);


//$str = "The rain in SPAIN falls mainly on the plains.";
//#pattern inside // , i for ignoring case
//$pattern = "/ain/i";
//$res=preg_match_all($pattern, $str,$matches);
//var_dump($res,$matches);

$email="nohashehab.iti@gmail.com";
$res=filter_var($email, FILTER_VALIDATE_EMAIL);
var_dump($res);


