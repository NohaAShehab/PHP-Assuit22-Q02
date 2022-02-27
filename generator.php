<?php


#used inside a fucntion
function randomNumbers($length)
{
    for($i=0;$i<$length;$i++){
        yield mt_rand(1,100);
    }
} //
$res= randomNumbers(100);
var_dump($res);

foreach ($res as $i){
    echo "{$i}"."<br>";
}
