<?php


// \b  Backspace (ascii code 08)
// \f  Form feed (ascii code 0C)
// \n  New line
// \r  Carriage return
// \t  Tab
// \"  Double quote
// \\  Backslash character
echo $MyString = "this is the demo for the string is can hold Alphanumeric value and symbals too like A-Z,a-z,
0-9 and !@#$%^&*() ";
$str = bin2hex($MyString);
echo ($str); 
echo "<br>";
$newString = "a";
echo bin2hex("A");
