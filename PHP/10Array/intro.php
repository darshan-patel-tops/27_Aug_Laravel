<?php

$data = "Testing";
$ABC_Maths = 50;
$ABC_Eng = 90;
$ABC_Comp = 100;
$dataArray = [50,90,100,true,"Test",45.12,'a'];
echo "<pre>";
$Assoc = ["Maths"=>50,"Eng"=>90,"Comp"=>100];
print_r($dataArray);
print_r($Assoc);
$dataArray = array(50,90,100);
$MultiDimension = array("SchoolName"=>array("9th"=>array("A"=>array("Maths"=>90,"Eng"=>98,"Comp"=>99),"B"=>array("Maths"=>90,"Eng"=>98,"Comp"=>99)),"10th"=>array("X"=>array("Maths"=>90,"Eng"=>98,"Comp"=>99),"Y"=>array("Maths"=>90,"Eng"=>98,"Comp"=>99))));
echo "<h1>".$MultiDimension['SchoolName']['9th']['A']['Maths']."</h1>";
print_r($MultiDimension);
// print_r($dataArray);

?>
<p><strong>Array </strong> Multiple data in single element/varaible </p>
<p><strong>Array </strong> stores its data in key => value paire </p>
<p><strong>Array </strong> if keys are numeric only that time it will be considered as Number / index array  </p>
<p><strong>Array </strong> if keys are alpha/numeric that time it will be considered as associative array  </p>
<p><strong>Array </strong> array within array is multidimensional  </p>