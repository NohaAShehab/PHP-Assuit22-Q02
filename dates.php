<?php


//var_dump(date('jS F Y'));
//
//var_dump(mktime("9",
//    "24",30,2,25,2022));
//
//
//var_dump(date("jS F Y",1645773870));

//$date = new DateTime();
//var_dump($date);
//$timeZone = $date->getTimezone();
//var_dump($timeZone);
//
//var_dump($timeZone->getName());
//var_dump($timeZone->getLocation());

#############
$time=time();
var_dump($time);
################3
var_dump(date("U"));  # get time stamp
##################
var_dump(getdate());
#################33
var_dump(getdate()[0]);
###############################
var_dump(checkdate("2","28",2022));
##################333 format time stamp
//
//echo strftime('%A')."<br>";
//echo strftime('%X')."<br>";
//echo strftime('%c')."<br>";
//echo strftime('%y')."<br>";
####################################

$bdayunix = mktime (0, 0, 0, 11,3, 2011);
$nowunix = time(); // get unix ts for today
$ageunix = $nowunix - $bdayunix;
$time=$ageunix / (365 * 24 * 60 * 60);
var_dump($time);





