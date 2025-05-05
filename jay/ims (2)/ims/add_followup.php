<?php 

	include('header.php');

  $select_staff="select * from staff";
  $staff_data=mysqli_query($con,$select_staff);


  if(isset($_GET['f_id']))
  {
    $inqid=$_GET['f_id'];
  }

	if(isset($_POST['submit']))
	{
		$details = $_POST['details'];
    $addedby = $_POST['addedby'];

		$sql_follow = "insert into followup (inquiry_id,follow_detail,follow_by) values ('$inqid','$details','$addedby')";
		mysqli_query($con,$sql_follow);
    header('location:view_inquiry.php');
	}
	
 ?>

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Role Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Role Form</li>
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
                <h3 class="card-title">Add followup</h3>
              </div>
              <form method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">followup details</label>
                    <input type="textbox" class="form-control" name="details" id="exampleInputEmail1" placeholder="Enter Role Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleSelectCourse">Added By</label>
                      <select class="custom-select " id="exampleSelectCourse" name="addedby">
                        <option value="null" selected disabled>Added By</option>
                        <?php while($data = mysqli_fetch_assoc($staff_data)) { ?>
                          <option><?php echo $data['name']; ?></option>
                        <?php } ?>
                      </select>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Add Role</button>
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