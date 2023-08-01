<?php
echo "<pre>";
echo "<br>============================= Fill ================================= <br>";

// $a1=array_fill(starting,total_element,"value");
$a1=array_fill(10,4,"blue");
print_r($a1);

$arr = ["TOPS","SG"];
$new1=array_pad($arr,4,"blue");
print_r($new1);