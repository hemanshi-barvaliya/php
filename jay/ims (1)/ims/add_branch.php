<?php 

	include('header.php');

  if(isset($_GET['u_id']))
  {
    $u_id = $_GET['u_id'];
    $qry_branch = "select * from branch where branch_id='$u_id'";
    $sql_branch = mysqli_query($con,$qry_branch);
    $data_branch = mysqli_fetch_assoc($sql_branch);
  }

	if(isset($_POST['submit']))
	{
		$branch_name = $_POST['name'];
		$address = $_POST['address'];
		$branch_contact = $_POST['contact'];

    if(isset($_GET['u_id']))
    {
      $u_id = $_GET['u_id'];
      $sql_branch = "update branch set branch_name='$branch_name', address='$address', branch_contact='$branch_contact' where branch_id='$u_id'";
      echo "<script>alert('hello');</script>";
    }
    else
    {
      $sql_branch = "insert into branch (branch_name,address,branch_contact) values ('$branch_name','$address','$branch_contact')";
    }
		$branch_sql = mysqli_query($con,$sql_branch);
		header('location:view_branch.php');
	}
	
 ?>

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Branch Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Branch</li>
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
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Branch</h3>
              </div>
              <form method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Branch Name</label>
                    <input type="textbox" class="form-control" name="name" id="exampleInputEmail1" value="<?php echo @$data_branch['branch_name']; ?>" placeholder="Enter Branch Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Branch Contact</label>
                    <input type="textbox" class="form-control" name="contact" pattern="[0-9]{10}" value="<?php echo @$data_branch['branch_contact']; ?>" id="exampleInputEmail1" placeholder="Enter Branch contact">
                  </div>
                  <div class="form-group">
                    <label for="exampleaddress">Branch Address</label>
                    <textarea type="textbox" class="form-control" name="address" id="exampleaddress" placeholder="Enter Branch Address"><?php echo @$data_branch['address']; ?></textarea>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Add Branch</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

 <?php 
 include('footer.php');
  ?>