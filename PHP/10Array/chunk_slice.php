<?php


echo "<pre>";
$cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");
print_r($cars);
print_r(array_chunk($cars,2));
print_r(array_slice($cars,2));

?>