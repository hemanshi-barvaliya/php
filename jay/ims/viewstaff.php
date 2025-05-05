<?php 
  include_once 'header.php';

	$staff_query = "select * from staff";
	$staff_sql = mysqli_query($con,$staff_query);

if(isset($_GET['d_id']))
  {
    $d_id = $_GET['d_id'];

  
      $sel_qry = "select * from staff where staff_id = '$d_id'";
      $sel_sql = mysqli_query($con,$sel_qry);
      $sel_staff_data = mysqli_fetch_assoc($sel_sql);

      unlink('assets/staff/'.$sel_staff_data['image']);

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
            <h1>Staff Data</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Staff Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">No</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Contact</th>
                      <th>Password</th>
                      <th>Image</th>
                      <th>Role</th>
                      <th>Status</th>
                      <th style="width: 40px">Update</th>
                      <th style="width: 40px">Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $cnt=1; while($data = mysqli_fetch_assoc($staff_sql)){ ?>
                    	<tr>
                    		<td><?php echo $cnt++; ?></td>
                    		<td><?php echo $data['name']; ?></td>
                    		<td><?php echo $data['email']; ?></td>
                    		<td><?php echo $data['contact']; ?></td>
                    		<td><?php echo $data['password']; ?></td>
                    		<td>
                    			<img src="assets/staff/<?php echo $data['image']; ?>" width="100">
                    		</td>
                    		<td><?php echo $data['role']; ?></td>
                    		<td><?php echo $data['status']; ?></td>
                    		<td align="center"> <a href="addstaff.php?u_id=<?php echo $data['staff_id']; ?>" class="text-primary">Update</a> </td>
                    		<td align="center"> <a href="viewstaff.php?d_id=<?php echo $data['staff_id']; ?>" class="text-danger">Delete</a> </td>
                    	</tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

 <?php 
 	include('footer.php');
  ?>