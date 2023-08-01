<?php




$a = 5;
$a = 10;
$a = 15;

echo $a;
// $a =50;
// $a =10;
// $a =100;
// $fname=array("Peter","Peter","ab"=>"Ben","ac"=>"Joe","s");
$fname=array("a"=>"Peter","Peter","ab"=>"Ben","ac"=>"Joe","a"=>"s");
$age=array("a"=>"35","abbbbs"=>"37","acc"=>"43","test");


// $clm = array("username","password","gender");
// $val = array("TOPS","123","Male");


echo "<pre>";
// print_r(array_count_values($fname));
print_r($fname);
print_r($age);
// echo count($fname);
// exit;
// print_r($age);
echo "<br>=============================== Array Combine =================================== <br>";
$newar = (array_combine($fname,$age ));
print_r($newar);
echo "<br>=============================== Array Merge =================================== <br>";
print_r(array_merge($fname,$age));
echo "<br>=============================== Array Merge Recursive=================================== <br>";
print_r(array_merge_recursive($fname,$age));



?>