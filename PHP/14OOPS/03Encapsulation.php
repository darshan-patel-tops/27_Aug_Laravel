<?php


class Arithmaric{
    function AdditionOftwo($a,$b){
        echo $a+$b; //50000 line code
        // return 20+20;]
    }
    function AdditionOfThree($a,$b,$c){
        echo $a+$b+$c; //50000 line code
        // return 20+20;
    }
}
// With the help of new kwy word we can create an object of any class followed by new keyword we always write className 
$kaipan = new Arithmaric; //$kaipan is a variable which is help us to access properties of that particular class
$kaipan->AdditionOftwo(60,55) // accessing Class Function with -> (pointer sign) , 60,50 is arguments for the $a,$b parameter
// class is a collection of dataMember and Member Function Only

?>