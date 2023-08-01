<?php
echo $MyString = "this is the demo for the string is can hold Alphanumeric value and symbals too like A-Z,a-z,
0-9 and !@#$%^&*() ";

echo "<br>============== Chunk Split==============<br>";

// echo chunk_split($MyString,2,"$");

echo "<br>============== Count Chars==============<br>";

echo $str = "hhhh A a a";
echo "<pre>";
// print_r( count_chars($str)); // give 1 where ascii values stored char
// print_r( count_chars($str,1)); // give only thoes keys where char stored
// print_r( count_chars($str,2)); // remove thoes keys where char stored
print_r( count_chars($str,2)); // remove thoes keys where char stored
?>
