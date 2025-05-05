<?php 

	include('header.php');

  $role_sql = "select * from role";
  $sql_role = mysqli_query($con,$role_sql);

  if(isset($_GET['u_id']))
  {
    $u_id = $_GET['u_id'];
    $u_select_qry = "select * from staff where staff_id='$u_id'";
    $u_select_sql = mysqli_query($con,$u_select_qry);
    $u_select_data = mysqli_fetch_assoc($u_select_sql);
  }

	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $contact = $_POST['contact'];
    $role = $_POST['role'];
    $status = $_POST['status'];
    $image = $_FILES['image']['name'];
    // $image_name = date("Y-m-d-His").'-r'.rand(1000,9999).'-'.$image;
    // $path = 'assets/staff/'.$image_name;

      $chk_email_qry = "select * from staff where email='$email'";
      $chk_email_sql = mysqli_query($con,$chk_email_qry);
      $chk_mail_no = mysqli_num_rows($chk_email_sql);


      if($_FILES['image']['name'] == "")
      {
        $image_name = $u_select_data['image'];
      }
      else
      {
        
        $image_name = date("Y-m-d-His").'-r'.rand(1000,9999).'-'.$image;
        $path = 'assets/staff/'.$image_name;
        move_uploaded_file($_FILES['image']['tmp_name'],$path);
      }

      if($chk_mail_no > 0 && $email != $u_select_data['email'])
      {
        $msg = "this user already registered......";
      }
      else
      { 
        if(isset($_GET['u_id']))
        {
          unlink('assets/staff/'.$u_select_data['image']);
          $add_staff_qry = "update staff set name='$name',email='$email',password='$password',contact='$contact',image='$image_name',role='$role',status='$status' where staff_id='$u_id'";
        }
        else
        {
          $add_staff_qry = "insert into staff (name,email,password,contact,image,status,role) values ('$name','$email','$password','$contact','$image_name','block','$role')";
        }
        $add_staff_sql = mysqli_query($con,$add_staff_qry);

        header('location:view_staff.php');
      }


    // $chk_email_qry = "select * from staff where email='$email'";
    // $chk_email_sql = mysqli_query($con,$chk_email_qry);
    // $chk_mail_no = mysqli_num_rows($chk_email_sql);

    // if($chk_mail_no > 0)
    // {
    //   $msg = "this user already registered......";
    // }
    // else
    // {
    //   $add_staff_qry = "insert into staff (name,email,password,contact,image,status,role) values ('$name','$email','$password','$contact','$image_name','block','$role')";
    //   $add_staff_sql = mysqli_query($con,$add_staff_qry);

    //   move_uploaded_file($_FILES['image']['tmp_name'],$path);
    //   header('location:view_staff.php');
    // }
	}


	
 ?>

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Staff Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Staff Form</li>
            </ol>
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
                    <input type="textbox" class="form-control" name="name" id="exampleInputEmail1" value="<?php echo @$u_select_data['name']; ?>" placeholder="Enter Staff Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail2">Staff Email</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail2" value="<?php echo @$u_select_data['email']; ?>" placeholder="Enter Staff Email">
                  </div>
                  <div class="form-group">
                    <label for="examplecontact">Staff Contact</label>
                    <input type="textbox" class="form-control" name="contact" value="<?php echo @$u_select_data['contact']; ?>" pattern="[0-9]{10}" id="examplecontact" placeholder="Contact Number">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="password" value="<?php echo @$u_select_data['password']; ?>" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Upload Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleSelectBorder">Select Role</label>
                    <select class="custom-select " id="exampleSelectBorder" name="role">
                      <option disabled selected>Select Role</option>
                      <?php while($role_name = mysqli_fetch_assoc($sql_role)){ ?>
                        <option value="<?php echo $role_name['role_name']; ?>" <?php if(@$u_select_data['role'] == $role_name['role_name']) { echo "selected";} ?>>
                          <?php echo $role_name['role_name']; ?>  
                        </option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleStatus">Select Status</label>
                    <select class="custom-select " id="exampleStatus" name="status">
                      <option value="active">active</option>
                      <option value="block">block</option>
                      <option value="pending" selected>pending</option>
                    </select>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary"><?php if(@$u_id){echo "Edit Staff";} else{ echo "Add Staff";} ?></button>
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-6">
            <?php if(@$u_select_data['image']){ ?>
            <img src="assets/staff/<?php echo @$u_select_data['image']; ?>" class="img-fluid">
            <?php } ?>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
  </div>

 <?php 
 include('footer.php');
  ?>