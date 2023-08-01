<?php


$array4 = array(1,2,3,4,5);;
echo "<pre>";
print_r($array4);

// echo $array4[0];
// echo $array4[1];
// echo $array4[2];
// foreach ($array4 as $key => $value) {
// 	echo $value;
// }
// array_walk() is support two para for keys and value
function myfunction($value,$key){
  echo "<br>The key $key has the value $value<br>";
  return $value*$value;
}
// $a=array("a"=>"red","b"=>"green","c"=>"blue");
$a=array(1,2,3,4,5);
// array_walk("array name","function name");
print_r(array_walk($a,"myfunction")) ;

function myMapFunction($v)
{
  return($v*$v);
}

// array_map() is support single para just for value
echo "<br> =============== Array Map ================ <br>";
$map_arr=array(1,2,3,4,5);
print_r(array_map("myMapFunction",$map_arr));
// print_r(array_map("myfunction",$a));


?>