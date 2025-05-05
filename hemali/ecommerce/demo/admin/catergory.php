<?php 
include_once 'header.php'; 
if(isset($_POST['submit']))
{
	$catergory=$_POST['name'];
	
	$query="insert into  catergory values(null,'$catergory')";
	mysqli_query($connect,$query);
	header('location:catergory.php');
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
							<h3 class="card-title">Add Catergory</h3>
						</div>
						<!-- /.card-header -->
						<!-- form start -->
						<form method="post" enctype="multipart/form-data">
							<div class="card-body">
								<div class="form-group">
									<label for="exampleInputEmail1">Name</label>
									<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Tital Name" name="name">
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