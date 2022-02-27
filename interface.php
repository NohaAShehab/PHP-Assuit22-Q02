<?php

    # solve multiple inheritance 0--0> abstract methods.
class A{}
    Interface Transportion{
        const test=10;
        function move();
        function fuel();
        function speed();

    }

    Interface Item{
        function setPrice($price);
    }

//    abstract class Car implements Transportion{
//
//    }

     class Car  extends  A implements Transportion, Item {
         function move(){}
         function fuel(){}
         function speed(){}
         function setPrice($price)
         {
             // TODO: Implement setPrice() method.
         }

     }


class Bus implements Transportion, Item {
    function move(){}
    function fuel(){}
    function speed(){}
    function setPrice($price)
    {
        // TODO: Implement setPrice() method.
    }

}