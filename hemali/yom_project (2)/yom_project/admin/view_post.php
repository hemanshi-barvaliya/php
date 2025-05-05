<?php 
ob_start();
include 'header.php'; 

$sql_select = "select *from post";
$data = mysqli_query($con,$sql_select);






?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>View Slider</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
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
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image</th>
                  </tr>
                  </thead>
                  <tbody>
                  </tr>
                  <?php while ($res = mysqli_fetch_assoc($data)) { ?>
                  <tr>
                    <td><?php echo $res['id']; ?></td>
                    <td><?php echo $res['post_name']; ?></td>
                    <td><?php echo $res['post_des']; ?></td>
                    <td><img src="images/<?php echo $res['image']; ?>" width="100"></td>
                  </tr>
                <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

<?php include 'footer.php'; ?>
