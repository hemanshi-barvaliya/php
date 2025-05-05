<?php 
include_once 'header.php'; 
if(isset($_POST['submit']))
{
	// $image=$_FILES['image']['name'];
	// $path="image/".$image;
	// move_uploaded_file($_FILES['image']['tmp_name'],$path);
	$icon=$_POST['icon'];
	$name=$_POST['name'];
	$discription=$_POST['discription'];
	
	$query="insert into offer values(null,'$icon','$name','$discription')";
	mysqli_query($connect,$query);
	// header('location:slider.php');
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
							<h3 class="card-title">Add Offer</h3>
						</div>
						<!-- /.card-header -->
						<!-- form start -->
						<form method="post" enctype="multipart/form-data">
							<div class="card-body">
								<!-- <div class="form-group">
									<label for="exampleInputFile">Choose icon</label>
									<div class="input-group">
										<div class="custom-file">
											<input type="file" class="custom-file-input" id="exampleInputFile" name="image">
											<label class="custom-file-label" for="exampleInputFile">Choose file</label>
										</div>
										<div class="input-group-append">
											<span class="input-group-text">Upload</span>
										</div>
									</div>
								</div> -->
								<div class="form-group">
									<label for="exampleInputEmail1">Add Icon</label>
									<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Icon name" name="icon">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Tital</label>
									<input type="text" class="form-control" id="exampleInputEmail1" placeholder="About offer" name="name">
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Offer Description</label>
									<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Description" name="discription">
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