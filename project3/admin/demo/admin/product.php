<?php 
include_once 'header.php'; 
if(isset($_POST['submit']))
{

	$image=$_FILES['image']['name'];
	$path="image/".$image;
	move_uploaded_file($_FILES['image']['tmp_name'],$path);
	$catergory=$_POST['catergory'];
	$name=$_POST['name'];
	$basic=$_POST['basic'];
	$discount=$_POST['discount'];
	

	$query="insert into  product values(null,'$image','$catergory','$name','$basic','$discount')";
	mysqli_query($connect,$query);
	header('location:view_product.php');
}

$cat_data = mysqli_query($connect,"select * from catergory");

?>

<div class="content-wrapper">
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<!-- left column -->
				<div class="col-md-6">   
					<div class="card card-primary">
						<div class="card-header">
							<h3 class="card-title">Add Product</h3>
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
									<label for="exampleInputPassword1">Catergory</label>
									<select name="catergory">
										<?php while($res = mysqli_fetch_assoc($cat_data)){ ?>
										<option value="<?php echo $res['id']; ?>"><?php echo $res['name'] ?></option>
										<?php } ?>
									</select>
								</div>

								<div class="form-group">
									<label for="exampleInputEmail1">Product Name</label>
									<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Product Name" name="name">
								</div>

								<div class="form-group">
									<label for="exampleInputEmail1">Basic price</label>
									<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Original Price" name="basic">
								</div>

								<div class="form-group">
									<label for="exampleInputEmail1">Discounted price</label>
									<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter discounted Price" name="discount">
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