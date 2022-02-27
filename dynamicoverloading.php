<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
class Test{
    # allow define mehtod 0---> runtime
    function __call(string $name, array $arguments)
    {
        // TODO: Implement __call() method.
        var_dump($arguments);

    }
    public static function __callStatic($name, $arguments)
    {
        echo "Calling static method '$name' "
            . implode(', ', $arguments) . "<br>";
    }




}

$t= new Test();
$t->myfun("fff");

$t2= new Test();
$t2->hello("hello world");


Test::welcome("noha","2022");