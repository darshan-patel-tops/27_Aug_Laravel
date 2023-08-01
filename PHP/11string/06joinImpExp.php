<?php
echo $st = "Welcome To The TOPS Techno";
// explode(' ', $st);
$arr = explode(' ', $st);
echo "<pre>"; 
print_r($arr);
echo $str_imp = implode(' ',$arr);
echo "<br>";
echo $str_imp = join('%',$arr);
// implode(glue, pieces)

echo $md5str = 'TOPS Technology';
echo "<br> ============ Split ==============<br>";
$split_array = str_split($md5str,4);
// print_r(explode(' ',$md5str ));
print_r($split_array);



?>