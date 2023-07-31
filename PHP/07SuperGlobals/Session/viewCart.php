<?php
require_once("header.php");
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

?>
<div class="container">
  <div class="row mt-5">
    <table>
      <thead>
        <tr>
          <td>Title</td>
          <td>Price</td>
        </tr>
      </thead>
      <tbody>
        <?php
        // echo "<pre>";
        // print_r($_SESSION);
        if (isset($_SESSION['CartData']) && count($_SESSION['CartData']) > 0) {
          
          foreach($_SESSION['CartData'] as $data){ ?>
            <tr>
              <td><?php echo $data['title']; ?></td>
              <td><?php echo $data['price']; ?></td>
            </tr>
          
        <?php }}else{ ?>

          <tr>
            <td>No Product added in cart</td>
          </tr>
        <?php } ?>
        <tr>
          <td colspan="2">
            <a href="emptycart.php">Empty Cart</a>
          </td>
        </tr>
      </tbody>
    </table>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</body>

</html>