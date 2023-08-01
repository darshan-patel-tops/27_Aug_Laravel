<?php


class Arithmaric{
    function AdditionOftwo($a,$b){
        return $a+$b; //50000 line code
        // return 20+20;]
    }
    function AdditionOfThree($a,$b,$c){
        echo $a+$b+$c; //50000 line code
        // return 20+20;
    }
}
class AdvArithmaric extends Arithmaric{
    function AvgOftwo($x,$z){
        $Addition = $this->AdditionOftwo($x,$z);
        $Res = $Addition/2;
        echo "Addition two : $Addition <br>";
        echo "AvgOftwo : $Res";
    }
}

$obAdvArithmaric = new AdvArithmaric;
$obAdvArithmaric->AdditionOftwo(40,80);
$obAdvArithmaric->AvgOftwo(40,80);
