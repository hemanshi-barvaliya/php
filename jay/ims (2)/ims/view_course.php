<?php 
	include('header.php');

	$branch_qry = "select * from course";
	$branch_sql = mysqli_query($con,$branch_qry);

	if(isset($_GET['d_id']))
	{
		$d_id = $_GET['d_id'];
		$delete_qry = "delete from course where course_id = '$d_id'";
		mysqli_query($con,$delete_qry);
		header('location:view_course.php');
	}
 ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Course Data</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Course Data</li>
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
                <h3 class="card-title">Course Table</h3>

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
                      <th>Course Name</th>
                      <th>Content</th>
                      <th>Fees</th>
                      <th style="width: 40px">Update</th>
                      <th style="width: 40px">Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $cnt=1; while($data = mysqli_fetch_assoc($branch_sql)){ ?>
                      <tr>
                        <td><?php echo $cnt++; ?></td>
                        <td><?php echo $data['course_name']; ?></td>
                        <td><?php echo $data['course_content']; ?></td>
                        <td>&#8377;<?php echo $data['course_amt']; ?></td>
                        <td align="center"> <a href="add_course.php?u_id=<?php echo $data['course_id']; ?>" class="text-primary"><i class="far fa-edit"></i></a> </td>
                        <td align="center"> <a href="view_course.php?d_id=<?php echo $data['course_id']; ?>" class="text-danger"><i class="fas fa-trash-alt"></i></a> </td>
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