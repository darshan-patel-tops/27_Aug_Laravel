<?php 
echo "<pre>";
// $fname=array("a"=>"Peter","Peter","ab"=>"Ben","ac"=>"Joe","a"=>"s");
// $age=array("a"=>"35","abbbbs"=>"37","acc"=>"43","test");
// $ar1=array(10,20,30,40);
// $ar2=array('a','b','c','d');
$ar1=array("test"=>10,20,30,40);
$ar2=array("test"=>'a','b','c','d');

print_r(array_merge($ar1,$ar2));
print_r(array_merge_recursive($ar1,$ar2));
// print_r(array_combine($ar1,$ar2));

?>
