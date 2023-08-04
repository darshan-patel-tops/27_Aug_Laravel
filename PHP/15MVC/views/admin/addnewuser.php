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
                      <input type="text" class="form-control"  name="username" id="username">
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col">
                      <input type="text" class="form-control" name="email" id="email">
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col">
                      
                      <input type="text" class="form-control" name="fname" id="fname">
                    </div>
                    <div class="col">
                      <input type="text" class="form-control" name="lname" id="lname">
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col">
                      <input type="text" class="form-control"  name="mobile" id="mobile">
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col">
                      <input type="file" class="form-control"  name="prof_pic" id="prof_pic">
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col">
                      <input type="radio" class="" value="Male" name="gender" id="Male"> <label for="Male">Male</label>
                      <input type="radio" class="" value="Female" name="gender" id="Female"> <label for="Female">Female</label>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col">
                      <input type="checkbox" name="chk[]"  id="Cricket" value="Cricket"> <label for="Cricket">Cricket</label>
                      <input type="checkbox" name="chk[]" id="Music" value="Music"> <label for="Music">Music</label>
                      <input type="checkbox" name="chk[]" id="Reading" value="Reading"> <label for="Reading">Reading</label>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col">
                      <button name="btn-add" type="submit">Add </button>
                      
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