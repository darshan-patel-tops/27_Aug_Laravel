<?php

echo "<pre>"; 
echo "<br>================= Pop ====================<br>";
$a=array("red","green","blue");
print_r($a);
echo "<br>=================  before  ====================<br>";
array_pop($a);
echo "<br>=================  after ====================<br>";
print_r($a);

echo "<br>=================  Push ====================<br>";
echo "<br>=================  before  ====================<br>";
$push_arr=array("red","green");
print_r($push_arr);
array_push($push_arr,"blue","yellow");
echo "<br>=================  after ====================<br>";
print_r($push_arr);


?>