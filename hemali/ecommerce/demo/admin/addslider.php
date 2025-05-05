<?php 
include_once 'header.php'; 

if(isset($_POST['submit']))
{
	$sub=$_POST['sub'];
	$title=$_POST['title'];
	$description=$_POST['description'];
	$image=$_FILES['image']['name'];
	$path="image/".$image;
	move_uploaded_file($_FILES['image']['tmp_name'],$path);

	$query="insert into slider values(null,'$sub','$title','$description','$image')";
	mysqli_query($connect,$query);
	header('location:slider.php');
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
							<h3 class="card-title">Add Slider</h3>
						</div>
						<!-- /.card-header -->
						<!-- form start -->
						<form method="post" enctype="multipart/form-data">
							<div class="card-body">
								<div class="form-group">
									<label for="exampleInputEmail1">Subject</label>
									<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter the subject" name="sub">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Title</label>
									<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter the title" name="title">
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Description</label>
									<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Description" name="description">
								</div>
								<div class="form-group">
									<label for="exampleInputFile">Slider Image</label>
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
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1">Check me out</label>
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

<?php include_once 'footer.php';?>