<?php 

  include('header.php');

  $select_staff="select * from staff where role='Inquiry'";
  $staff_data=mysqli_query($con,$select_staff);

   if(isset($_GET['a_id']))
  {
    $inq_id=$_GET['a_id'];
  }

  if(isset($_POST['submit']))
  {
    $assignto = $_POST['assignto'];

    $sql_assign = "update inquiry set assign_to='$assignto' where inquiry_id='$inq_id'";
    mysqli_query($con,$sql_assign);

    header('location:viewinquiry.php');

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
                          <option value="<?php echo $data['staff_id']; ?>"><?php echo $data['name']; ?></option>
                        <?php } ?>
                      </select> 
                  </div>
                </div>

                <div class="card-footer">
                  <input type="submit" name="submit" class="btn btn-primary" name="Add Role">
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