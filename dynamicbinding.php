<?php

Interface Animal{
    public function makeNoise();
}

class Cat implements  Animal{
    public function makeNoise(){
        $this->Meow();
    }
    public function Meow(){
        echo " <br> Meow Meow";}
}

class Dog implements  Animal{
    public function makeNoise(){
        $this->bark();
    }
    public function bark(){
        echo "<br> bark";}
}

class Human{
    Const CAT='cat';
    Const DOG='dog';
    private $petpreference;
    private $pet;
    
    function isCatLover():bool{
            return $this->petpreference= Human::CAT;
    }
    function isDogLover():bool{
        return $this->petpreference= Human::DOG;
    }
    function setPet(Animal $pet){
            $this->pet=$pet;
    }
    function getPet():Animal{
        return $this->pet;
    }


}
$p= new Human();
$p->isCatLover();  # set catlover= true
//var_dump();
if($p->isCatLover()){
    $p->setPet(new Cat());
}

var_dump($p->getPet());
var_dump($p->getPet() instanceof Animal);
$p->getPet()->makeNoise();


$p->isDogLover(); #set dog lover = true
if($p->isDogLover()){
    $p->setPet(new Dog);
}

$p->getPet()->makeNoise();
