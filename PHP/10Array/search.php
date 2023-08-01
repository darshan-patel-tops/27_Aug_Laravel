<?php
echo "<br>================== array_key_exists =========================<br>";
$a=array("Volvo"=>"XC90","BMW"=>"X5");
// var_dump(array_key_exists("Volvo1",$a));
if (array_key_exists("Volvo",$a))
  {
  echo "Key exists!";
  }
else
  {
  echo "Key does not exist!";
}
echo "<br>================== array_search =========================<br>";

  $aa=array("a"=>"red","b"=>"green","c"=>"blue");
echo array_search("green",$aa);

echo "<br>================== in_array =========================<br>";
$people = array("Peter", "Joe", "Glenn", "Cleveland");

if (in_array("Glenn", $people))
  {
  echo "Match found";
  }
else
  {
  echo "Match not found";
  }
  
  ?>