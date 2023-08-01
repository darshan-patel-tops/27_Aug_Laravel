<?php

$md5Str = "a";
$md5Str1 = "amukdef@12";
// $pass = "TOPS";
$pass = "check@data444";
$md5Str2 = "aAAsdfgkjahdfgkhajdfgkjhasdkjg";

echo md5($md5Str1)."<br>";  // use for the encription and its one way encription we cant decript it
// echo md5("A")."<br>";  // use for the encription and its one way encription we cant decript it
// exit;
echo base64_encode($md5Str1)."<br>";
echo base64_decode("YW11a2RlZkAxMg==")."<br>";

$str = " The    tops Tech Something  data   ";
$str1 = "The    tops tech   data";

echo strlen($str)."<br>"; 
echo strtoupper($str)."<br>"; 
echo strtolower($str)."<br>"; 
echo ucfirst($str1)."<br>"; 
echo ucwords($str1)."<br>"; 
echo trim($str1)."<br>"; 
echo "This is the rtrim: ".rtrim($str1,'data')."<br>"; 
echo "This is the ltrim: ".ltrim($str1,'The')."<br>"; 


// echo "<a href='google.com'>Google</a><br><br>";
// echo $strhtml = '&lt;a href=&quot;https://www.tops-int.com&quot;&gt;tops.com&lt;/a&gt;';
// echo html_entity_decode($strhtml)."<br>";
echo "This is the output: ".$strhtmlent = '<a href="https://www.tops-int.com">Go to Tops Technology</a></br>';
// echo "htmlentities :  ".htmlentities($strhtmlent)."<br>";
$str = "This is some <b>bold</b> text.";
echo htmlspecialchars($strhtmlent);


?>
<!-- <a href="https://www.tops-int.com">Go to Tops Technology</a></br> -->