<?php 

	include('header.php');

  $select_staff="select * from staff where role='Inquiry'";
  $staff_data=mysqli_query($con,$select_staff);

  $inq_id=$_GET['a_id'];

	if(isset($_POST['submit']))
	{
		$assignto = $_POST['assignto'];

		$sql_assign = "insert into assign_inquiry (inquiry_id,name) values ('$inq_id','$assignto')";
		mysqli_query($con,$sql_assign);
	}
	
 ?>

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Assign Inquiry</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Assign Inquiry</li>
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
                <h3 class="card-title">Assign Inquiry</h3>
              </div>
              <form method="post">
                <div class="card-body">
                  
                  <div class="form-group">
                    <label for="exampleSelectCourse">Assign to</label>
                      <select class="custom-select " id="exampleSelectCourse" name="assignto">
                        <option value="null" selected disabled>Assign To</option>
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