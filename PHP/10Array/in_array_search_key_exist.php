<?php
$a=array("Volvo"=>"XC90","BMW"=>"X5");

// var_dump(array_key_exists("Volvo",$a));

// exit();
if (array_key_exists("Volvo1",$a)){
    echo "Key exists!<br>";
  } else {
    echo "Key does not exist!<br>";
}

$people = array("Peter", "Joe", "Glenn", "Cleveland");
var_dump(in_array("Glenn", $people));
if (in_array("Glenn", $people))
  {
  echo "Match found<br>";
  }
else
  {
  echo "Match not found<br>";
  }


  $a=array("a"=>"red","b"=>"green","c"=>"blue");
echo array_search("blue",$a);
