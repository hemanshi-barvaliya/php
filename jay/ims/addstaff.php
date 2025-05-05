<?php 

  include('header.php');

  $role_sql = "select * from role";
  $sql_role = mysqli_query($con,$role_sql);

  if(isset($_GET['u_id']))
  {
    $u_id = $_GET['u_id'];
    $user_query = "select * from staff where staff_id='$u_id'";
    $user_sql = mysqli_query($con,$user_query);
    $user_data = mysqli_fetch_assoc($user_sql);
  }

  if(isset($_POST['submit']))
  {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $contact = $_POST['contact'];
    $role = $_POST['role'];
    $status = $_POST['status'];
    $image_name = $_FILES['image']['name'];
    
      if($image_name == "")
      {
        $image_name = $user_data['image'];
      }
      else
      {
        
        $path = 'assets/staff/'.$image_name;
        $file = $_FILES['image']['tmp_name'];
        move_uploaded_file($file,$path);
      }

     
        if(isset($_GET['u_id']))
        {
          unlink('assets/staff/'.$user_data['image']);

          $query = "update staff set name='$name',email='$email',password='$password',contact='$contact',image='$image_name',role='$role',status='$status' where staff_id='$u_id'";
        }
        else
        {
          $query = "insert into staff (name,email,password,contact,image,status,role) values ('$name','$email','$password','$contact','$image_name','block','$role')";
        }

        $staff_sql = mysqli_query($con,$query);

        header('location:viewstaff.php');
      }


 if(isset($_GET['d_id']))
  {
    $d_id = $_GET['d_id'];

  
      $sel_qry = "select * from staff where staff_id = '$d_id'";
      $sel_sql = mysqli_query($con,$sel_qry);
      $staff_data = mysqli_fetch_assoc($sel_sql);

      unlink('assets/staff/'.$staff_data['image']);

      $delete_qry = "delete from staff where staff_id = '$d_id'";

      mysqli_query($con,$delete_qry);

      header('location:viewstaff.php');
}

  
  
 ?>

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Staff</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <p class="text-danger text-center"><?php echo @$msg; ?></p>
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Staff</h3>
              </div>
               <form method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Staff Name</label>
                    <input type="textbox" class="form-control" name="name" id="exampleInputEmail1" value="<?php echo @$user_data['name']; ?>" placeholder="Enter Staff Name">
                  </div><br>
                  <div class="form-group">
                    <label for="exampleInputEmail2">Staff Email</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail2" value="<?php echo @$user_data['email']; ?>" placeholder="Enter Staff Email">
                  </div><br>
                  <div class="form-group">
                    <label for="examplecontact">Staff Contact</label>
                    <input type="textbox" class="form-control" name="contact" value="<?php echo @$user_data['contact']; ?>" pattern="[0-9]{10}" id="examplecontact" placeholder="Enter Staff Contact Number">
                  </div><br>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="password" value="<?php echo @$user_data['password']; ?>" id="exampleInputPassword1" placeholder="Password">
                  </div><br>
                  <div class="form-group">
                    <label for="exampleInputFile"> Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image" id="exampleInputFile">
                      </div><br>
                    </div>
                  </div><br>
                  <div class="form-group">
                    <label for="exampleSelectBorder">Select Role</label>
                    <select class="custom-select " id="exampleSelectBorder" name="role">
                      <option disabled selected>Select Role</option>
                      <?php while($role_name = mysqli_fetch_assoc($sql_role)){ ?>
                        <option value="<?php echo $role_name['role_name']; ?>" <?php if(@$user_data['role'] == $role_name['role_name']) { echo "selected";} ?>>
                          <?php echo $role_name['role_name']; ?>  
                        </option>
                      <?php } ?>
                    </select>
                  </div><br>
                  <div class="form-group">
                    <label for="exampleStatus">Select Status</label>
                    <select class="custom-select " id="exampleStatus" name="status">
                      <option value="active">active</option>
                      <option value="block">block</option>
                      <option value="pending" selected>pending</option>
                    </select>
                  </div>
                </div><br>
                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary"><?php if(@$u_id){echo "Edit Staff";} else{ echo "Add Staff";} ?></button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
  </div>

 <?php 
 include('footer.php');
  ?>