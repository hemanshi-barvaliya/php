<?php
include_once 'header.php';
$query="select * from contact";
$data= mysqli_query($connect,$query);

?>

            </tbody>
       <div class="content-wrapper">  
  <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">View Post</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered" style="width:auto;">
                  <thead>
                    <tr>
                      <th style="width: 10px">No</th>
                      <th style="width: 30px">Name</th> 
                      <th>Email</th>
                      <th>Subject</th>
                      <th>Message</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php while($slider_res = mysqli_fetch_assoc($data)){ ?>
                    <tr>
                      <td><?php echo $slider_res['id']; ?></td>
                      <td><?php echo $slider_res['name']; ?></td>
                      <td><?php echo $slider_res['email']; ?></td>
                      <td><?php echo $slider_res['subject']; ?></td>
                      <td><?php echo $slider_res['message']; ?></td>
                    </tr>
                  <?php } ?>
                 </table>
              </div>
            </div>
        </div>
    </div>
</div>
</section>
</div>

<?php include_once 'footer.php'; ?>