<?php  
// $a = array("TOPS","Techno",123,123.123,true);
echo "<pre>";
// print_r($a);
// var_dump($a);
// var_export($a);


// types of array
// 1> numeric/ index array
	$a = array("TOPS",786=>"Techno",123,5=>123.123,true); // array keys are defined as number only
	print_r($a);
	$numeric1 = array("790"=>"TOPS","788"=>"Techno","789"=>123);
	$a = array("790"=>"TOPS","788"=>"Techno","789"=>123,"test");

	print_r($a);

// 2> Assciative array
	$a = array("FName"=>"TOPS","Lname"=>"Techno","Password"=>123); // keys are user defined and it's must contain alph-numeric val
	$a = array("FName"=>"TOPS","Lname"=>"Techno","Password"=>123,23.123); 
	


// 3> Multidimensional array
	
	$a = array("SchoolName"=>array("10th"=>array("Ram"=>array('Maths'=>50,'Sci'=>45,"Eng"=>49),
							 "Shyam"=>array('Maths'=>40,'Sci'=>42,"Eng"=>48),
							 "Ghnshyam"=>array('Maths'=>40,'Sci'=>42,"Eng"=>48)),
				"11th"=>array("Ram"=>array('Maths'=>50,'Sci'=>45,"Eng"=>49),
							 "Shyam"=>array('Maths'=>40,'Sci'=>42,"Eng"=>48),
							 "Ghnshyam"=>array('Maths'=>40,'Sci'=>42,"Eng"=>48)),
				"12th"=>array("Ram"=>array('Maths'=>50,'Sci'=>45,"Eng"=>49),
							 "Shyam"=>array('Maths'=>40,'Sci'=>42,"Eng"=>48),
							 "Ghnshyam"=>array('Maths'=>40,'Sci'=>42,"Eng"=>48))
			  )); 
	print_r($a);
?>