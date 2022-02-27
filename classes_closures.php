<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//$printclosure=function(){
//    echo "<h3 style='color: crimson'> {$this->name} </h3>";
//};
//class Employee{
//        public $name="Omar";
//}
//$e= new Employee();
//$res= $printclosure->bindTo($e);
////var_dump($res);
////$res();
//$printclosure->bindTo($e)();
//$printclosure->bindTo($e)();
###############################################
//class Person{
//    public $name="Ahmed";
//}
//$p= new Person();

### bind a clousre to the object, the closure can access the public pro.
//$p_c=$printclosure->bindTo($p);
//var_dump($p_c);
//$p_c();
##############################clousure ###########################
//(function(){
//    echo "I am the clousure";
//})();
############################################
//echo "######################### clousrue access public property###############################";
//$newclosure=function ($pro_name){
//    echo " <h3 style='color: purple'> {$this->$pro_name} </h3>";
//};
//class Test{
//    public $name="Ahmed";
//    public $salary=444;
//    private $day="Monday";
//}
//$t=new Test();
//
//$t_clo=$newclosure->bindTo($t);
//$t_clo("name");
//$t_clo("salary");


//echo "######################### clousrue access all properties###############################";
//$newclosure=function ($pro_name){
//    echo " <h3 style='color: purple'> {$this->$pro_name} </h3>";
//};
//class Test{
//    public $name="Ahmed";
//    public $salary=444;
//    private $day="Monday";
//
//    function  __set(string $name, $value): void
//    {
//        // TODO: Implement __set() method.
//        unset($this->name);
//    }
//}
//$t=new Test();
//$t_clo=$newclosure->bindTo($t,Test::class);
//$t_clo("name");
//$t_clo("salary");
//$t_clo("day");
#################################### call clousure
#### from php7 # call , can access private members
//$echo_closure=function ($name){
//    echo "<h2> clousure called , {$this->name},
//        {$this->day} </h2>";
//    echo $name;
//};
//
//$echo_closure->call($t,"ali");

####################################

# clousure into a class

class Person{

    # divide the function logic into stages
    function sayHello(){
        echo "<h2> Hello world 1 </h2>";
        return function (){
            echo "<h2> Hello world 2</h2>";
            echo "<h2> Hello world 3</h2>";
            return function ($name){
                echo "I am {$name}";
            };
        };
    }
}
$p= new Person();
$p->sayHello()()("iti");
//$res=$p->sayHello();
//var_dump($res);
//echo "####################################";
//$test=$res();
//var_dump($test);
//$test("noha");





