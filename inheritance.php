<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//
//class Person{
//    public $name;
//    private $address="cairo";
//    protected $country="Egypt";
//
//    function __construct()
//    {
//        echo "Person constructor called";
//    }
//
//    protected function hello(){
//        echo "I am the protected function inside person";
//    }
//    private function Test(){
//        echo "I am the protected function inside person";
//    }
//    # override --> 2 function with the same function signature
//    # but the body --->
//    function welcome(){
//        echo "Welcom to the person class";
//    }
//    function __destruct()
//    {
//        echo "<h1 style='color: red'> Person removed </h1>";
//    }
//}
//class Studnet extends Person{
//    public $level;
//
//    function __construct()
//    {
//        parent::__construct();
//        echo "child constructor called";
//    }
//
//    public function callingStudent()
//    {
//        # access protected members
//        # $this-> current object
//        $this->country="Saudi-Arabia";
//        echo "I am a studnet {$this->country} <br>";
////        $this->hello();
////        Person::hello(); #### call protected class
//
//    }
//
//    function welcome(){
//        parent::welcome();
//        echo "Welcom to the Student class";
//    }
//
//    function __destruct()
//    {
//        echo "<h1 style='color: red'> studnet removed </h1>";
//    }
//}
//
//$s= new Studnet();
//echo "<h2>";
//var_dump($s);
//$s->callingStudent();
//$s->welcome();
//
//


//final class Test{
//
//
//}
//
//### final classes cannot be inherited.
//class Exam extends Test{
//
//}
################################ Abstract #############
abstract class Test{
    public $name;
    private $id;
    # canot take object from the abstract classes
    # can contain  function, and abstract
    function welcome(){

    }

    abstract function test(); ## function without body
}
//$t= new Test();
//var_dump($t);
##########################
//class Exam extends Test{
//    ## you must ovveride the abstract method
//    function test()
//    {
//    }
//}
//
//$e= new Exam();
//var_dump($e instanceof Test);