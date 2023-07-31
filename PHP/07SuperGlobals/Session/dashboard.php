<?php 
require_once("header.php"); 
echo "<pre>";
print_r($_SESSION);
echo "</pre>";

?>
<div class="container">
  <div class="row mt-5">
    <div class="col-md-4 offset-md-4">
    <?php echo "Hello, ",$_SESSION['UserData']['username']?>
     
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</body>
</html>