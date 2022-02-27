<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


class Person{
        # Properties
        # public property --> can be accesed via object
        # from inside or outside the class
        public $name="shymaa";
        # accessed from class or child classed
        protected $email="shymaa@gmail.com";
        # accessde from the class only
        private $salary=1000;
        ####
        #variable doesn't depend on the caller instnace
        # can be accessed only via the class name
        static $isAlive=true;
        const DAY="Monday";

        ###### constructor, special function called while creating the object

        function __construct($name="",$email="",$salary=0)
        {
            $this->name=$name;
            $this->email=$email;
            $this->salary=$salary;
            echo "<h3 style='color: blue'> Object created {$this->name}</h3>";

        }

        # when the script finish
        function __destruct(){
            echo "<h4 style='color: red'> The object removed 
            {$this->name} </h4>";
        }

    # function
        function sayHello(){
            echo " <h4> Hello I am {$this->name}, 
            {$this->email}, {$this->salary} </h4>";
        }
        ### setters and getters for the private, protected members
        function setEmail($email){
            # validate email
            $this->email=$email;
        }
        function getEmail(){
            return $this->email;
        }
        
        static function welcome(){
            echo "<h4> Welcome to static function </h4>";
        }
}
$p2=new Person("Rana");
var_dump($p2);

unset($p2);
//var_dump($p2);
$p= new Person("Ahmed","ahmed@gmail.com",
    "1000");
$p->name="ahmed";
//$p->email="test";
//$p->salary="male";
//$p->company="iti";
//echo Person::$isAlive;
//echo Person::DAY;
//Person::$isAlive="updated";
//echo Person::$isAlive;
$p->sayHello();
$p->setEmail("ahmed@gmail.com");
echo "{$p->getEmail()}";

$p2= new Person;
//var_dump($p);
//var_dump($p2);

Person::welcome();