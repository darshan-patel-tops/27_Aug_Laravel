<div class="container-xxl flex-grow-1 container-p-y">
  <div class="row">
    <div class="col-lg-12 mb-4 order-0">
      <div class="card">
        <div class="d-flex align-items-end row">
          <div class="col-sm-12">
            <div class="card-body">
              <?php 
              // echo "<pre>";
              // print_r($usersDataById['Data']);
              // echo "</pre>";
              ?>
              <form method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="col-md-8">
                  <div class="row mt-3">
                    <div class="col">
                      <input type="text" class="form-control" value="<?php echo ($usersDataById['Data'][0]->username) ?? "no";?>" name="username" id="username">
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col">
                      <input type="text" class="form-control" value="<?php echo $usersDataById['Data'][0]->email;?>" name="email" id="email">
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col">
                      <?php $explodeFullname = explode(" ",$usersDataById['Data'][0]->fullname);  ?>
                      <input type="text" class="form-control" value="<?php echo $explodeFullname[0];?>" name="fname" id="fname">
                    </div>
                    <div class="col">
                      <input type="text" class="form-control" value="<?php echo $explodeFullname[1] ?? "";?>" name="lname" id="lname">
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col">
                      <input type="text" class="form-control" value="<?php echo $usersDataById['Data'][0]->mobile;?>" name="mobile" id="mobile">
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col">
                      <input type="file" class="form-control"  name="prof_pic" id="prof_pic">
                      <input type="hidden" class="form-control"  name="prof_pic_old" value="<?php echo $usersDataById['Data'][0]->prof_pic; ?>" id="prof_pic_old">
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col">
                      <input type="radio" class=""  <?php if($usersDataById['Data'][0]->gender == "Male"){ echo "checked";  } ?>  value="Male" name="gender" id="Male"> <label for="Male">Male</label>
                      <input type="radio" class="" <?php if($usersDataById['Data'][0]->gender == "Female"){ echo "checked";  } ?>  value="Female" name="gender" id="Female"> <label for="Female">Female</label>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col">
                      <?php 
                      $HobbyArray = explode(",",$usersDataById['Data'][0]->hobby);
                      // var_dump(in_array("Reading",$HobbyArray));
                      ?>
                      <input type="checkbox" name="chk[]" <?php if(in_array("Cricket",$HobbyArray)){ echo "checked";  } ?>  id="Cricket" value="Cricket"> <label for="Cricket">Cricket</label>
                      <input type="checkbox" name="chk[]"  <?php if(in_array("Music",$HobbyArray)){ echo "checked";  } ?>  id="Music" value="Music"> <label for="Music">Music</label>
                      <input type="checkbox" name="chk[]"  <?php if(in_array("Reading",$HobbyArray)){ echo "checked";  } ?>  id="Reading" value="Reading"> <label for="Reading">Reading</label>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col">
                      <button name="btn-update" type="submit">Update</button>
                      
                      <!-- <select name="" id=""></select> -->
                    </div>
                  </div>
                </div>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>