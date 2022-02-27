<?php
class OpenSource {
    private $instructor;
    protected $sub_tracks;
    public $list_of_courses;
    const PI = 3.1415;
    public function __construct() {
        $this->instructor = "Noha";
        $this->sub_tracks = "Application";
        $this->list_of_courses = ["Python","PHP","Scala","Laravel","Admin"];
    }
    public function getInstructor() {
        return $this->instructor;
    }
    public function setInstructor($instructor) {
        $this->instructor = $instructor;
    }
    private function getsub_tracks() {
        return $this->sub_tracks;
    }
}


#################### check what is inside the class

$os_reflect= new ReflectionClass("Opensource");
var_dump($os_reflect);

$methods= $os_reflect->getMethods();
var_dump($methods);

$attributes= $os_reflect->getProperties();
var_dump($attributes);

##### reflection for the method
$a= new OpenSource();
$res= new ReflectionMethod($a, "getsub_tracks");
var_dump($res->isPrivate());


##################################3

$dsn = 'mysql:dbname=php_assuit;host=127.0.0.1;port=3306;'; #port number
$user = 'php_assuit';
$password = 'Iti123456789_';
$db = new PDO($dsn, $user, $password);

$pdo_reflect= new ReflectionClass("PDO");
$methods=$pdo_reflect->getMethods();
var_dump($methods);

