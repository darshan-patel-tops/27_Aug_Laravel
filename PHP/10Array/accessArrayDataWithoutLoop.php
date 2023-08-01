<?php

// $arr = array("tops","Techno");
$arr = array(100,200,300,400);
// echo "<pre>";
// print_r($arr);
// echo "</pre>";

// echo $arr[1]
// foreach ($arr as $key => $value) {
//     # code...
//     echo $value;
// }
function AccessArrayUseFilter($arRec){
    return $arRec+5;
}
$arrFilter = array_filter($arr,"AccessArrayUseFilter");
echo "<pre>";
echo "Filter Res<br>";
// print_r($arr);
print_r($arrFilter);

function AccessArrayUseMap($arRec){
    return $arRec+5;
}
$arrMapRes = array_map("AccessArrayUseMap",$arr);
// print_r($arr);
echo "Filter Res<br>";
print_r($arrMapRes);

function AccessArrayUseWalk($arRec,$arrD){
    echo "value: ".$arRec."key: ".$arrD."<br>";
}
$arrWalkRes = array_walk($arr,"AccessArrayUseWalk");
print_r($arr);
print_r($arrWalkRes);




?>