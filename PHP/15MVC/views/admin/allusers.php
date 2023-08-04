
<div class="container-xxl flex-grow-1 container-p-y">
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
                <tbody>
                  <?php $i = 1;
                  foreach ($allUsers['Data'] as $key => $value) { ?>
                    <tr>
                      <td><?php echo $i; ?></td>
                      <td><?php echo $value->username; ?></td>
                      <td><?php echo $value->gender; ?></td>
                      <td><?php echo $value->email; ?></td>
                      <td> <img src="uploads/<?php echo $value->prof_pic; ?>" width="100px" alt=""> </td>
                      <td><?php echo $value->mobile; ?></td>
                      <td>
                        <?php if ($value->status == 1) { ?>
                          <a href="edituserdata?userid=<?php echo $value->id; ?>" title="Update"> <i class="menu-icon tf-icons bx bx-edit"></i></a>
                        <?php } ?>
                        <a href="deleteuserdata?userid=<?php echo $value->id; ?>" title="Delete"> <i class="menu-icon tf-icons bx bx-trash"></i></a>
                      </td>
                    </tr>
                  <?php $i++;
                  } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>