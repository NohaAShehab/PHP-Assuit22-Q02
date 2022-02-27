<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
Interface MyInter{
    function Test();  # the
    function sayhello();
}

trait hello{
    ### functios only , public
    function sayhello(){
        echo 'Hello';
    }
    function welcome(){
        echo 'welcome';
    }
}

class A implements MyInter {
    use hello ;

    public function sayhello($name="tt")
    {
        echo "<h1> overriden </h1>";
    }
    public function Test()
    {
        // TODO: Implement Test() method.
    }

}
$a= new A;
//$a->sayhello();
$a->welcome();

class B{
    use hello;
}
echo "<br>########################## <br>";
$b= new B;
$b->sayhello();
$b->welcome();
