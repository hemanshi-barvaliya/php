<?php
include_once 'header.php';
$query="select * from product";
$data= mysqli_query($connect,$query);

if (isset($_GET['d_id'])) 
{
  
    $id=$_GET['d_id'];
    $del_sel="select image from product where id=".$id;
    $del_img=mysqli_query($connect,$del_sel);
    $del_res=mysqli_fetch_assoc($del_img);

    unlink("image/".$del_res['image']);  

    $delete="delete from product where  id=".$id;
    mysqli_query($connect,$delete);
    header("location:view_product.php");
}

?>

<div class="content-wrapper">	
 	<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">View Product</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table-bordered" width="100%">
                  <thead>
                    <tr>
                      <th style="width: 10px">No</th>
                      <th style="width: 100px">Image</th>
                      <th>Catergory</th>
                      <th>Name</th>
                      <th>Basic Price</th>
                      <th>Discounted Price</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                    <?php while($slider_res = mysqli_fetch_assoc($data)){ ?>
                    <tr>
                      <td><?php echo $slider_res['id']; ?></td>
                      <td><img src="image/<?php echo $slider_res['image']; ?>" width="100%"></td>
                      <td><?php echo $slider_res['catergory']; ?></td>
                      <td><?php echo $slider_res['name']; ?></td>
                      <td><?php echo $slider_res['basic']; ?></td>
                      <td><?php echo $slider_res['discount']; ?></td>
                      <td><a href="View_product.php?d_id=<?php echo $slider_res['id'];?>">Delete</a></td>
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