<?php

echo "<pre>";

echo "<p> ========== _GET =========== </p>";
if (isset($_GET['username'])) {
    print_r($_GET);
    $usern = $_GET['username'];
    echo "Hello, $usern";
}
echo "<p> ========== _POST =========== </p>";
if (isset($_POST['username_post'])) {
    print_r($_POST);
    $usern = $_POST['username_post'];
    echo "Hello, $usern";
}
echo "<p> ========== _REQUEST =========== </p>";
print_r($_REQUEST);
echo "<p> ========== _FILES =========== </p>";
print_r($_FILES);
echo "<p> ========== GLOBALS =========== </p>";
print_r($GLOBALS);
echo "</pre>";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>GET METHOD</h2>
    <!-- <form> -->
        <p>get method use URL for sending client data to the server thats why its less secure</p>
        <p>appndeing data to URL using ? is called QueryString pagename.extension?var=Value&var2=val2</p>
        <p>Get limitaion 2048 char only</p>
        <p>Get not supported file uploading</p>
    <form method="get">
        <input type="text" name="username" id="">
        <input type="password" name="password" id="">
        <input type="submit" name="save" id="">
    </form>
    <h2>POST METHOD</h2>
    <form method="post">
        <input type="text" name="username_post" id="">
        <input type="submit" name="save_post" id="">
    </form>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="profile_pic" id="">
        <input type="submit" name="save_profile" id="">
    </form>
</body>
</html>