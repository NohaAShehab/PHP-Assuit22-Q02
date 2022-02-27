<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Employee{
    public  $name;
    public $email;
    static $instances = 0;
    public $instance;

    public function __clone() {
        $this->instance = ++self::$instances;
    }

    public function __tostring(){
            return $this->name;
    }

}

$e= new Employee();
$e->name="Ahmed";
$e->email="ahmed@gmail.com";

# deep --->
$e2=$e;
var_dump($e2);
var_dump($e);
echo "###################################";
$e->name="Mohamed";
var_dump($e);
var_dump($e2);
echo "############cloninig #######################";
############## shallow copy --> acopy from the object
$e3=clone $e;
var_dump($e3);
var_dump($e);

$e->name="updated";

var_dump($e3);
var_dump($e);


var_dump(Employee::$instances);

echo $e3;