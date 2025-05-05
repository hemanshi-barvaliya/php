<?php 

	include('header.php');

  if(isset($_GET['u_id']))
  {
    $u_id = $_GET['u_id'];
    $qry_course = "select * from course where course_id='$u_id'";
    $sql_course = mysqli_query($con,$qry_course);
    $data_course = mysqli_fetch_assoc($sql_course);
  }

	if(isset($_POST['submit']))
	{
		$course_name = $_POST['name'];
		$content = $_POST['content'];
    $course_content = str_replace(' ',', ',$content);
		$course_amt = $_POST['amount'];

    if(isset($_GET['u_id']))
    {
      $u_id = $_GET['u_id'];
      $sql_course = "update course set course_name='$course_name', course_content='$course_content', course_amt='$course_amt' where course_id='$u_id'";
    }
    else
    {
  		$sql_course = "insert into course (course_name,course_content,course_amt) values ('$course_name','$course_content','$course_amt')";
    }
  	$course_sql = mysqli_query($con,$sql_course);
  	header('location:view_course.php');
	}
	
 ?>

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Course Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Course</li>
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
                <h3 class="card-title">Add Course</h3>
              </div>
              <form method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Course Name</label>
                    <input type="textbox" class="form-control" name="name" id="exampleInputEmail1" value="<?php echo @$data_course['course_name']; ?>" placeholder="Enter Course Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleaddress">Course Content</label>
                    
                    <textarea type="textbox" class="form-control" name="content" id="exampleaddress" placeholder="Enter Course Content"><?php 
                      $content = str_replace(', ',' ',@$data_course['course_content']);
                      echo $content;
                     ?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Course Fees</label>
                    <input type="textbox" class="form-control" name="amount" pattern="[0-9]{}" value="<?php echo @$data_course['course_amt']; ?>" id="exampleInputEmail1" placeholder="Enter Course Fees">
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