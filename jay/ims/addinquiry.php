<?php 

	include('header.php');

  $course_sql = "select * from course";
  $sql_course = mysqli_query($con,$course_sql);

  $inquiry_sql = "select * from staff where role = 'Admin' or role = 'Branch Manager'";
  $sql_inquiry = mysqli_query($con,$inquiry_sql);
  $sql_add= mysqli_query($con,$inquiry_sql);

  $branch_sql = "select * from branch";
  $sql_branch = mysqli_query($con,$branch_sql);

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
    $contact = $_POST['contact'];
    $pcontact = $_POST['pcontact'];
    $course = $_POST['course'];
    $course_content = $_POST['course_content'];
    $fees = $_POST['fees'];
    $reference = $_POST['reference'];
    $reference_name = $_POST['reference_name'];
    $inquiryby = $_POST['inquiryby'];
    $addedby = $_POST['addedby'];
    $joindate = $_POST['joindate'];
    $batchtime = $_POST['batchtime'];
    $branch = $_POST['branch'];
    $status = $_POST['status'];
    $followup = $_POST['followup'];
    $inquirydetail = $_POST['inquirydetail'];


    // print_r($_POST);

    $add_inquiry = "insert into inquiry 
                      (name,contact,parent_contact,course,course_content,fees,reference,reference_name,inquiryby,addedby,joindate,batch,branch,status,inquirydetail) 
                        values 
                      ('$name','$contact','$pcontact','$course','$course_content','$fees','$reference','$reference_name','$inquiryby','$addedby','$joindate','$batchtime','$branch','$status','$inquirydetail')";

    mysqli_query($con,$add_inquiry);

    $inquiry_query = "select inquiry_id from inquiry ORDER BY inquiry_id DESC limit 1";

    $inquiry_sql = mysqli_query($con,$inquiry_query);

    $data = mysqli_fetch_assoc($inquiry_sql);

    $inqiry_id = $data['inquiry_id'];

    $add_follow_up = "insert into followup 
                      (inquiry_id,follow_detail,follow_by) values ('$inqiry_id','$followup','$addedby')";

    mysqli_query($con,$add_follow_up);
    
    header('location:viewinquiry.php');

	}
 ?>

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Inquiry Form</h1>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <p class="text-danger text-center"><?php echo @$msg; ?></p>
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Inquiry</h3>
              </div>
               <form method="post">
                <div class="card-body row">
                  <div class="col-4">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Name</label>
                      <input type="textbox" class="form-control" name="name" id="exampleInputEmail1"  placeholder="Enter Name">
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-group">
                      <label for="exampleInputEmail2">Contact Number</label>
                      <input type="text" class="form-control" name="contact" pattern="[0-9]{10}" id="exampleInputEmail2" placeholder="Enter Contact">
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-group">
                      <label for="examplecontact">Parent Contact</label>
                      <input type="text" class="form-control" name="pcontact" pattern="[0-9]{10}" pattern="[0-9]{10}" id="examplecontact" placeholder="Enter Parent Contact">
                    </div>
                  </div><br><br><br><br>
                  <div class="col-4">
                    <div class="form-group">
                      <label for="exampleSelectCourse">Select Course</label>
                      <select class="custom-select " id="exampleSelectCourse" name="course">
                        <option value="null" selected disabled>Select Course</option>
                        <?php while($data = mysqli_fetch_assoc($sql_course)) { ?>
                          <option><?php echo $data['course_name']; ?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-group">
                      <label for="exampleContent">Course Content</label>
                      <input type="text" class="form-control" name="course_content" id="exampleContent"  placeholder="Enter Course Content">
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-group">
                      <label for="exampleFees">Course Fees</label>
                      <input type="textbox" class="form-control" name="fees" pattern="[0-9]{}" id="exampleFees" placeholder="Course Fees">
                    </div>
                  </div><br><br><br><br>
                  <div class="col-4">
                    <div class="form-group">
                      <label for="examplereference">Reference</label><br>
                      <select class="custom-select" name="reference" id="examplereference">
                        <option disabled selected>Select reference</option>
                        <option>Internet</option>
                        <option>Student</option>
                        <option>Seminar</option>
                        <option>Staff</option>
                        <option>IT Company</option>
                        <option>Others</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-group">
                      <label for="examplerefname">Reference Name</label>
                      <input type="text" class="form-control" name="reference_name" id="examplerefname"  placeholder="Enter Reference Name">
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-group">
                      <label for="exampleinquiry">Inquiry By</label><br>
                      <select class="custom-select" name="inquiryby" id="exampleinquiry">
                        <option selected disabled>Select Inquiry By</option>
                        <?php while($data = mysqli_fetch_assoc($sql_inquiry)) { ?>
                          <option><?php echo $data['name']; ?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div><br><br><br><br>
                  <div class="col-3">
                    <div class="form-group">
                      <label for="exampleadded">Added By</label><br>
                      <select class="custom-select" id="exampleadded" name="addedby">
                        <option>Select Added By</option>
                        <?php while($adata = mysqli_fetch_assoc($sql_add)) { ?>
                          <option><?php echo $adata['name']; ?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="form-group">
                      <label for="exampleInputEmail2">Expected Join Date</label>
                      <input type="date" class="form-control" name="joindate" >
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="form-group">
                      <label for="examplebatchtime">Batch Time</label><br>
                      <select class="custom-select" name="batchtime" >
                        <option disabled selected>Select Batch</option>
                        <option>8 to 10</option>
                        <option>10 to 12</option>
                        <option>12 to 2</option>
                        <option>2 to 4</option>
                        <option>4 to 6</option>
                        <option>6 to 8</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="form-group">
                      <label for="examplebranch">Visited Branch</label><br>
                      <select class="custom-select" name="branch">
                        <option selected disabled>Select Branch</option>
                        <?php while($data = mysqli_fetch_assoc($sql_branch)) { ?>
                          <option><?php echo $data['branch_name']; ?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div><br><br><br><br>
                  <div class="col-4">
                    <div class="form-group">
                      <label for="examplestatus">Status</label><br>
                      <select class="custom-select" name="status" id="examplestatus">
                        <option disabled selected>Select Status</option>
                        <option>Pending</option>
                        <option>Demo</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-group">
                      <label for="examplefollowup">Follow Up Details</label>
                      <textarea type="text" class="form-control" name="followup"   placeholder="Enter Follow Up Details"></textarea>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-group">
                      <label for="exampleInquirydetail">Inquiry Details</label>
                      <textarea type="textbox" class="form-control" name="inquirydetail"  placeholder="Enter Inquiry Detail"></textarea>
                    </div>
                  </div><br><br><br><br><br>
                
                <div class="col-12 text-center">
                  <input type="submit" name="submit" class="btn btn-primary " value="Add Inquiry">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

 <?php 
 include('footer.php');
  ?>