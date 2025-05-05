<?php 

  include('header.php');

  if(isset($_GET['u_id']))
  {
    $u_id = $_GET['u_id'];
    $branch_query = "select * from branch where branch_id='$u_id'";
    $branch_sql = mysqli_query($con,$branch_query);
    $branch_data = mysqli_fetch_assoc($branch_sql);
  }

  if(isset($_POST['submit']))
  {
    $branch_name = $_POST['name'];
    $address = $_POST['address'];
    $branch_contact = $_POST['contact'];

    if(isset($_GET['u_id']))
    {
      $u_id = $_GET['u_id'];
      
      $branch_sql = "update branch set branch_name='$branch_name', address='$address', branch_contact='$branch_contact' where branch_id='$u_id'";
     
    }
    else
    {
      $branch_sql = "insert into branch (branch_name,address,branch_contact) values ('$branch_name','$address','$branch_contact')";
    }
    $branch_sql = mysqli_query($con,$branch_sql);

    header('location:viewbranch.php');
  }


  if(isset($_GET['d_id']))
  {
    $d_id = $_GET['d_id'];
    
    $delete_qry = "delete from branch where branch_id = '$d_id'";

    mysqli_query($con,$delete_qry);

    header('location:viewbranch.php');
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
                    <input type="textbox" class="form-control" name="name" id="exampleInputEmail1" value="<?php echo @$branch_data['branch_name']; ?>" placeholder="Enter Branch Name">
                  </div><br>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Branch Contact</label>
                    <input type="textbox" class="form-control" name="contact" pattern="[0-9]{10}" value="<?php echo @$branch_data['branch_contact']; ?>" id="exampleInputEmail1" placeholder="Enter Branch contact">
                  </div><br>
                  <div class="form-group">
                    <label for="exampleaddress">Branch Address</label>
                    <textarea type="textbox" class="form-control" name="address" id="exampleaddress" placeholder="Enter Branch Address"><?php echo @$branch_data['address']; ?></textarea>
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