<?php 
	include('header.php');

	$staff_qry = "select * from staff";
	$staff_sql = mysqli_query($con,$staff_qry);

	if(isset($_GET['d_id']))
	{
		$d_id = $_GET['d_id'];

		if($id == $d_id)
		{
			echo "<script>alert('you can\'t Delete this user..... ');</script>";
		}
		else
		{
			$sel_qry = "select * from staff where staff_id = '$d_id'";
			$sel_sql = mysqli_query($con,$sel_qry);
			$sel_staff_data = mysqli_fetch_assoc($sel_sql);

			unlink('assets/staff/'.$sel_staff_data['image']);

			$delete_qry = "delete from staff where staff_id = '$d_id'";
			mysqli_query($con,$delete_qry);
			header('location:view_staff.php');
		}
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
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Staff Data</li>
            </ol>
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

                <div class="card-tools">
                  <ul class="pagination pagination-sm float-right">
                    <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                  </ul>
                </div>
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
                    			<img src="assets/staff/<?php echo $data['image']; ?>" width="50">
                    		</td>
                    		<td><?php echo $data['role']; ?></td>
                    		<td><?php echo $data['status']; ?></td>
                    		<td align="center"> <a href="add_staff.php?u_id=<?php echo $data['staff_id']; ?>" class="text-primary"><i class="far fa-edit"></i></a> </td>
                    		<td align="center"> <a href="view_staff.php?d_id=<?php echo $data['staff_id']; ?>" class="text-danger"><i class="fas fa-trash-alt"></i></a> </td>
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