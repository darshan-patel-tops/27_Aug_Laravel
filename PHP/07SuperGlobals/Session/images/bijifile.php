<?php

$a = 50;
$a = 150;
// $a = "";
$userData = ["tops","Techno",1,123,12.12,"location"=>["SG","CG","Maninagar"]];
echo $a;
echo "<pre>";
print_r($userData);
unset($a);
unset($userData['location']);
if (isset($_POST['deletefile'])) {
    // unlink("filename.txt");
    unlink($_POST['file_name']);
}
print_r($userData);
echo $a;
?>
