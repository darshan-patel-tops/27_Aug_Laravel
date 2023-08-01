<?php
$a1=array("a"=>"red","b"=>"green","j"=>"blue","d"=>"yellow");
$a2=array("a"=>"red","f"=>"green","g"=>"blue","k"=>"data");
echo "<pre>";
print_r(array_diff($a1,$a2));
print_r(array_diff_key($a1,$a2));
?>