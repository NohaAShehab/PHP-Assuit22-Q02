<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

Interface DisplayMsg{
    function printMsg($msg);
}

class Appliction{
    private $displayer;

    function setDisplayer(DisplayMsg $msg){
        $this->displayer=$msg;
    }

    function getDisplayer():DisplayMsg{
        return $this->displayer;
    }
}

$app=new Appliction();
//class A implements DisplayMsg{
//    function printMsg($msg)
//    {
//        // TODO: Implement printMsg() method.
//    }
//}
//$a= new A();

$app->setDisplayer(new class implements DisplayMsg{
    function printMsg($msg)
    {
        // TODO: Implement printMsg() method.
        echo "{$msg}";
    }
});

$res= $app->getDisplayer();
var_dump($res);
$res->printMsg("Hello form anonymous class");

$app2=new  Appliction();
$app2->setDisplayer(new class implements DisplayMsg{
    function printMsg($msg)
    {
        // TODO: Implement printMsg() method.
        echo "<h2> {$msg} </h2>";
    }
    function myfun(){
        echo "this is my fun";
    }

});

$app2->getDisplayer()->printMsg("My name is noha");
$app2->getDisplayer()->myfun();