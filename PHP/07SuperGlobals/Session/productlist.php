<?php

require_once("header.php");


// $num    = 371;
// $sum    = 0;
// $temp   = $num;
// while($temp!= 0){
//     $rem    =   $temp%10;
//     $sum    =   $sum+($rem*$rem*$rem); 
//     $temp   =   $temp/10;
//     echo $temp."<br>";

// }
// if($num == $sum){
//    echo "Armstrong number"; 
// }
// else{
//    echo  "not an armstrong number";
// }


// exit;
// require_once("header.php")
// require_once("header1.php"); 
// require_once("header.php"); 
if (isset($_REQUEST['save'])) {
  // echo "<pre>";
  // print_r($_REQUEST);
  // print_r($_COOKIE);
  // echo "</pre>";
  if ($_COOKIE['username'] == $_REQUEST['username'] && $_COOKIE['password'] == $_REQUEST['password']) {
    echo "Success";
    $_SESSION['UserData'] = array("username" => $_REQUEST['username'], "password" => $_REQUEST['password']);
    header("location:dashboard.php");
  } else {
    echo "invalid user";
  }

  
  
  # code...
}
// echo "<pre>";
// print_r($_REQUEST);
if (isset($_REQUEST['addtocart'])) {
  # code...
  $_SESSION['CartData'] = array("prod1"=>array("price"=>$_REQUEST['price'],"title"=>$_REQUEST['p1name']));
  print_r($_SESSION['CartData']);
  echo "</pre>";
}
?>
<div class="container">
  <div class="row mt-5">
    <div class="col-md-3">
      <div class="card">
        <img class="card-img-top" src="images/digital-marketing.webp" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <p class="card-text">&#8377; 50,000</p>
          <form method="post">
            <input type="text" name="price" value="50000" id="price">
            <input type="text" name="p1name" value="Card title" id="p1name">
            <input type="submit" name="addtocart" id="addtocart">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</body>

</html>