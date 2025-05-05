<?php 
	include('header.php');

  $id = $_SESSION['staff_id'];

  if($staff_data['role']=="Admin" || $staff_data['role']=="Branch Manager" || $staff_data['role']=="Inquiry Manager" )
  {
	 $inquiry_qry = "select * from inquiry";
	 $inquiry_sql = mysqli_query($con,$inquiry_qry);
  }
  else if($staff_data['role']=="Inquiry")
  {
    $inquiry_qry = "select * from inquiry where assign_to='$id'";
    $inquiry_sql = mysqli_query($con,$inquiry_qry);
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
              <div class="card-body p-0 table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">No</th>
                      <th>Name</th>
                      <th>Course</th>
                      <th>Fees</th>
                      <th>Reference</th>
                      <th>Inquiry By</th>
                      <th>Join Date</th>
                      <th>Branch</th>
                      <th>FollowUp</th>
                      <?php if($staff_data['role']!="Inquiry"){ ?>
                      <th style="width: 40px">Edit</th>
                      <?php } ?>
                      <th >Add Followup</th>
                      <th >Assign Inquiry</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $cnt=1; while($data = mysqli_fetch_assoc($inquiry_sql)){ ?>
                    	<tr>
                    		<td><?php echo $cnt++; ?></td>
                    		<td>
                          <div class="border-bottom mb-1 pb-1"><?php echo $data['name']; ?></div>  
                          <div><?php echo $data['contact'].'<br>'.$data['parent_contact']; ?></div>  
                        </td>
                        <td class="text-center">
                          <div class="border-bottom mb-1 pb-1"><?php echo $data['course']; ?></div>  
                          <div><?php echo $data['course_content']; ?></div>  
                        </td>
                        <td>&#8377;<?php echo $data['fees']; ?></td>
                        <td class="text-center">
                          <div class="border-bottom mb-1 pb-1"><?php echo $data['reference']; ?></div>
                          <div><?php echo $data['reference_name']; ?></div>
                        </td>
                        <td>
                          <div class="border-bottom mb-1 pb-1"><?php echo $data['inquiryby']; ?></div>
                          <div><?php echo $data['inquirydetail']; ?></div>
                        </td>
                        <td class="text-center">
                          <div class="border-bottom mb-1 pb-1"><?php echo $data['joindate']; ?></div>
                          <div><?php echo $data['batch']; ?></div>
                        </td>
                        <td class="text-center">
                          <div class="border-bottom mb-1 pb-1"><?php echo $data['branch']; ?></div>
                          <div><?php echo $data['status']; ?></div>
                        </td>
                        <td class="text-center">
                          <?php 
                            $inq_id = $data['inquiry_id'];

                            $follow_select="SELECT * FROM followup WHERE inquiry_id='$inq_id' AND follow_id=(SELECT max(follow_id) FROM followup  WHERE inquiry_id='$inq_id')";
                            $follow_data=mysqli_query($con,$follow_select);
                            $follow_res=mysqli_fetch_assoc($follow_data);

                           ?>
                          <div class="border-bottom mb-1 pb-1"><?php echo $follow_res['follow_detail']; ?></div>
                          <div><?php echo $follow_res['follow_by']; ?></div>
                        </td>
                        <?php if($staff_data['role']!="Inquiry"){ ?>
                    		<td align="center"> <a href="add_staff.php?u_id=<?php echo $data['inquiry_id']; ?>" class="text-primary"><i class="far fa-edit"></i></a> </td>
                        <?php } ?>
                        <td>
                          <a href="add_followup.php?f_id=<?php echo $data['inquiry_id']; ?>" class="text-primary">Follow up</a>
                        </td>
                        <td>
                          <a href="assign_inquiry.php?a_id=<?php echo $data['inquiry_id']; ?>" class="text-primary">Assign Inquiry</a>
                        </td>
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