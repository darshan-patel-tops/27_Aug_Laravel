<?php
$MyString = "this is 'the' demo for the string is can hold Alphanumeric value and symbals too like A-Z,a-z,
0-9 and !@#$%^&*() ";
echo "<br>======== stristr true==========<br>";
echo stristr($MyString,"demo",true);
echo "<br>======== stristr ==========<br>";
echo stristr($MyString,"demo");
?>