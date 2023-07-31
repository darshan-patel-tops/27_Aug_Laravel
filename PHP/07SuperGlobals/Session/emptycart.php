
<?php
session_start();
// session_destroy();

unset($_SESSION['CartData']);
header("location:productlist.php");
?>