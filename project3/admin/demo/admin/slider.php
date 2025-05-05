<?php
include_once 'header.php';
$query="select * from slider";
$data= mysqli_query($connect,$query);

if (isset($_GET['d_id'])) 
{
  
    $id=$_GET['d_id'];
    $del_sel="select image from slider where id=".$id;
    $del_img=mysqli_query($connect,$del_sel);
    $del_res=mysqli_fetch_assoc($del_img);

    unlink("image/".$del_res['image']);  

    $delete="delete from slider where  id=".$id;
    mysqli_query($connect,$delete);
    header("location:slider.php");
}

// $user_id=$_SESSION['user_id']

?>

<div class="content-wrapper">	
 	<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">View Slider</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table-bordered" width="100%">
                  <thead>
                    <tr>
                      <th style="width: 10px">No</th>
                      <th>Subject</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th style="width: 40px">Image</th>
                      <!-- <th>Update</th> -->
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                    <?php while($slider_res = mysqli_fetch_assoc($data)){ ?>
                    <tr>
                      <td><?php echo $slider_res['id']; ?></td>
                      <td><?php echo $slider_res['sub']; ?></td>
                      <td><?php echo $slider_res['title']; ?></td>
                      <td><?php echo $slider_res['description']; ?></td>
                      <td><img src="image/<?php echo $slider_res['image']; ?>" width="100%"></td>
                      <td><a href="slider.php?d_id=<?php echo $slider_res['id'];?>">Delete</a></td>
                    </tr>
                	<?php } ?>
                    
                  </tbody>
                </table>
              </div>
            </div>
        </div>
    </div>
</div>
</section>
</div>

<?php include_once 'footer.php'; ?>