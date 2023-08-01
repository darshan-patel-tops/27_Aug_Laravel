<?php
function myfunction($v1,$v2){
	return $v1 . "-" . $v2;
}
$a=array("Dog","Cat","Horse");
// echo ($a);
echo (array_reduce($a,"myfunction"));
?>