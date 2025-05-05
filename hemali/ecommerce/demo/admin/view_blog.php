<?php
include_once 'header.php';
$query="select * from blog";
$data= mysqli_query($connect,$query);

if(isset($_GET['d_id']))
{
   $id=$_GET['d_id'];
   $delete_sel=mysqli_query($connect,"select * from blog where id=".$id); 
   $delete_res=mysqli_fetch_assoc($delete_sel);

   unlink("image/".$delete_res['image']);

   $delete=mysqli_query($connect,"delete from blog where id=".$id);
   header("location:view_blog.php");

}
?>

<div class="content-wrapper">	
 	<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">View Blog</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered" style="width:auto;">
                  <thead>
                    <tr>
                      <th style="width: 10px">No</th>
                      <th style="width: 30px">Image</th>
                      <th>Author Name</th>
                      <th>Date</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php while($blog_res = mysqli_fetch_assoc($data)){ ?>
                    <tr>
                      <td><?php echo $blog_res['id']; ?></td>
                      <td><img src="image/<?php echo $blog_res['image']; ?>" width="100px"></td>
                      <td><?php echo $blog_res['name']; ?></td>
                      <td><?php echo $blog_res['date']; ?></td>
                      <td><?php echo $blog_res['title']; ?></td>
                      <td><?php echo $blog_res['description']; ?></td>
                      <td><a href="view_blog.php?d_id=<?php echo $blog_res['id']; ?>">Delete<a/></td>
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