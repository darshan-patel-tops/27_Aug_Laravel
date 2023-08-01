<?php

function test_odd($var)
{
    // echo $var."<br>";
    echo $var*$var."<br>";
    return($var*$var);
}

$a1=array(1,2,2,3,4);
// $a1=array("a"=>"red","b"=>"green","c"=>"blue");
echo "<pre>";
// print_r(array_keys($a1));
print_r(array_filter($a1,"test_odd"));


?>