<?php
require_once("header.php");
// require_once("header.php")
// require_once("header1.php"); 
// require_once("header.php"); 
if (isset($_REQUEST['Register'])) {
    // echo "<pre>";
    // print_r($_REQUEST);
    // echo "</pre>";
    setcookie("username",$_REQUEST['username'],time()+3600);
    setcookie("password",$_REQUEST['password'],time()+3600);
    setcookie("email",$_REQUEST['email'],time()+3600);
    # code...
}
?>
<div class="container">
    <div class="row mt-5">
        <div class="col-md-4 offset-md-4">

            <div class="card">
                <div class="card-header text-center">Registration</div>
                <div class="card-body">
                    <form method="post">

                        <div class="row mt-2">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Enter User Name" name="username" id="username">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <input type="password" class="form-control" placeholder="Enter Password" name="password" id="password">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <input type="email" class="form-control" placeholder="Enter Email" name="email" id="password">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col text-center">
                                <input type="submit" class="btn btn-primary" value="Register" name="Register" id="Register">
                                <input type="reset" class="btn btn-danger" value="Cancel" name="cancel" id="cancel">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</body>

</html>