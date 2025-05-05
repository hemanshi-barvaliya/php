<?php 
include_once 'header.php'; 
if(isset($_POST['submit']))
{

	$image=$_FILES['image']['name'];
	$path="image/".$image;
	move_uploaded_file($_FILES['image']['tmp_name'],$path);

	
	$name=$_POST['name'];
	$date=$_POST['date'];
	$title=$_POST['title'];
	$description=$_POST['description'];
	

	$query="insert into  blog values(null,'$image','$name','$date','$title','$description')";
	mysqli_query($connect,$query);
	header('location:view_blog.php');
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
							<h3 class="card-title">Add Blog</h3>
						</div>
						<!-- /.card-header -->
						<!-- form start -->
						<form method="post" enctype="multipart/form-data">
							<div class="card-body">

								<div class="form-group">
									<label for="exampleInputFile">Post Image</label>
									<div class="input-group">
										<div class="custom-file">
											<input type="file" class="custom-file-input" id="exampleInputFile" name="image">
											<label class="custom-file-label" for="exampleInputFile">Choose file</label>
										</div>
										<div class="input-group-append">
											<span class="input-group-text">Upload</span>
										</div>
									</div>
								</div>

								<div class="form-group">
									<label for="exampleInputEmail1">Author Name</label>
									<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Author Name" name="name">
								</div>

								<div class="form-group">
									<label for="exampleInputPassword1">Date</label>
									<input type="date" class="form-control" id="exampleInputPassword1" placeholder="Published date" name="date">
								</div>

								<div class="form-group">
									<label for="exampleInputEmail1">Title</label>
									<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Title Name" name="title">
								</div>
								
								<div class="form-group">
									<label for="exampleInputPassword1">Description</label>
									<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Description" name="description">
								</div>				
							</div>
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