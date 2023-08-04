<div class="container-xxl flex-grow-1 container-p-y">
  <div class="row">
    <div class="offset-lg-10 col-lg-2 mb-4 order-0">
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add New
      </button>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12 mb-4 order-0">
      <div class="card">
        <div class="d-flex align-items-end row">
          <div class="col-sm-12">
            <div class="card-body">
              <table class="table table-bordered ">
                <tr class="bg-dark light-txt">
                  <th>Sr No</th>
                  <th>UserName</th>
                  <th>Gender</th>
                  <th>Email</th>
                  <th>Image</th>
                  <th>Mobile</th>
                  <th>Action</th>
                </tr>
                <tbody id="disp_users_data">

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form name="addnewuserform" id="addnewuserform" method="post">
          <div class="row mt-3">
            <div class="col">
              <input type="text" class="form-control" name="username" placeholder="Enter User Name" id="username">
            </div>
          </div>
          <div class="row mt-3">
            <div class="col">
              <input type="text" class="form-control" name="email" placeholder="Enter Email" id="email">
            </div>
          </div>
          <div class="row mt-3">
            <div class="col">
              <input type="text" class="form-control" name="mobile" placeholder="Enter Mobile" id="mobile">
            </div>
          </div>
          <div class="row mt-3">
            <div class="col">
              <input type="submit" class="btn btn-info" onclick="updatedata()" name="save" id="save" value="Add">
            </div>
          </div>
        </form>
      </div>
      <!-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div> -->
    </div>
  </div>
</div>
<script>
  fetch("http://localhost/laravel/27AugLaravelTTS10_30/27AugLaravelTTS10_30/PHP/API/viewalluser").then((response) => response.json()).then((res) => {
    // console.log(res);
    // console.log(res.Data);
    let HTMLTableData = ""
    res.Data.forEach(element => {
      console.log(element);
      // HTMLTableData +="<tr><td>"+element.username+"<td></tr>"
      HTMLTableData += `<tr>
                          <td>${element.id}</td>
                          <td>${element.username}</td>
                          <td>${element.gender}</td>
                          <td>${element.email}</td>
                          <td> <img src="uploads/${element.prof_pic}" width="50px"> </td>
                          <td>${element.mobile}</td>
                          <td>
                           <button type="button" onclick="getdatabyid(${element.id})" class="btn btn-primary"><i class="menu-icon tf-icons bx bx-edit"></i></button></td>
                      </tr>`
    });
    console.log(HTMLTableData);
    document.getElementById("disp_users_data").innerHTML = HTMLTableData
  })

  function updatedata() {
    event.preventDefault();
    // let FormData = $( "#addnewuserform" ).serialize()
    // $('#formid').serializeArray().reduce(function(a, x) { a[x.name] = x.value; return a; }, {});
    let formArray = $( "#addnewuserform" ).serializeArray()
    console.log(formArray);
    var returnArray = {};
    for (var i = 0; i < formArray.length; i++){
        returnArray[formArray[i]['name']] = formArray[i]['value'];
    }
    console.log(returnArray);
    let headerdata = {
      method: 'POST', // or 'PUT'
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify({FormData:returnArray}),
    }
    fetch("http://localhost/laravel/27AugLaravelTTS10_30/27AugLaravelTTS10_30/PHP/API/userdatabyid", headerdata).then((response) => response.json()).then((res) => {
      console.log(res.Data[0]);
      $('#exampleModal').modal('show')
      $("#username").val(res.Data[0].username)
    });
  }
  function getdatabyid(id) {
    console.log("called edit", id); 
    let headerdata = {
      method: 'POST', // or 'PUT'
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify({id:id}),
    }
    fetch("http://localhost/laravel/27AugLaravelTTS10_30/27AugLaravelTTS10_30/PHP/API/userdatabyid", headerdata).then((response) => response.json()).then((res) => {
      console.log(res.Data[0]);
      $('#exampleModal').modal('show')
      $("#username").val(res.Data[0].username)
    });
  }
</script>