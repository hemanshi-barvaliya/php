<?php 
include_once 'header.php'; 

if (isset($_GET['blog_id']))
{
	
}


if(isset($_POST['submit']))
{
	$comment=$_POST['comment'];
	$name=$_POST['name'];
	$place=$_POST['place'];


	$query="insert into  comment values(null,'$comment','$name','$place')";
	mysqli_query($connect,$query);
	// header('location:view_comment.php');
}
?>

<div class="content-wrapper">
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<!-- left column -->
				<div class="col-md-6">
					<div class="card card-primary">
						<div class="card-header">
							<h3 class="card-title">Add Comment</h3>
						</div>
						<!-- /.card-header -->
						<!-- form start -->
						<form method="post" enctype="multipart/form-data">
							<div class="card-body">
								<div class="form-group">
									<label for="exampleInputEmail1">Comment</label>
									<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Comment" name="comment">
								</div>	
							</div>

							<div class="card-body">
								<div class="form-group">
									<label for="exampleInputEmail1">Name</label>
									<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Name" name="name">
								</div>	
							</div>

							<div class="card-body">
								<div class="form-group">
									<label for="exampleInputEmail1">Email</label>
									<input type="email" class="form-control" id="exampleInputEmail1" placeholder="example@gmail.com" name="email">
								</div>	
							</div>

							<div class="card-body">
								<div class="form-group">
									<label for="exampleInputEmail1">Website</label>
									<input type="url" class="form-control" id="exampleInputEmail1" placeholder="https://example.com" name="url">
								</div>	
							</div>
							<!-- /.card-body -->

							<div class="card-footer">
								<button type="submit" class="btn btn-primary" name="submit">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

<?php include_once 'footer.php'; ?>