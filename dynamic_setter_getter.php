<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Employee{
    const pi=3.1;
    static $day="Monday";

    private $test="this is private property";
    public $var = 1000;

    # magic function
    function __set(string $name, $value):void
    {
//        // TODO: Implement __set() method.
        echo "<h4> Setter called </h4>";
        $this->$name = $value."#";
        unset($this->$name);
    }

    function __get($name){
        echo "<h1> getter called </h1>";
        return null;
    }

    function hello(){
        echo self::class;
        echo"<br>";
        echo self::pi;
        echo"<br>";
        echo self::$day;
    }


}
$e1= new Employee();
#dynmoc set for the variable
$e1->name="Ali";
//echo $e1->name;  ### considered as public property
echo $e1->__get("name");
$e1->__set("test","updated");
echo $e1->__get("test");


var_dump($e1);
echo "-------------------------------------------------------------";
$e2= new Employee();
#dynmoc set for the variable

$e2->company="iti";
var_dump($e2);

$e2->hello();