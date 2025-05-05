<?php 

$connect=mysqli_connect("localhost","root","","ecom"); 

if (isset($_POST['submit']))
{
	$name=$_POST['name'];
	$surname=$_POST['surname'];
	$image=$_FILES['image']['name'];
	$path="admin/image/".$image;
	move_uploaded_file($_FILES['image']['tmp_name'],$path);
	$email=$_POST['email'];
	$password=$_POST['password'];
	$country=$_POST['country'];

	$insert="insert into  register values(null,'$name','$surname','$image','$email','$password','$country')";
	mysqli_query($connect,$insert);
	header('location:signin.php');
}



?>
<!doctype html>
<html lang="en">


<!-- Mirrored from codervent.com/etrans/demo/authentication-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Aug 2024 14:27:30 GMT -->
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	<link href="assets/plugins/OwlCarousel/css/owl.carousel.min.css" rel="stylesheet" />
	<link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<link href="assets/plugins/nouislider/nouislider.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet" />
	<script src="assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
	<link href="assets/css/app.css" rel="stylesheet">
	<link href="assets/css/icons.css" rel="stylesheet">
	<title>eTrans - eCommerce HTML Template</title>
</head>

<body class="bg-theme bg-theme1">	<b class="screen-overlay"></b>
	<!--wrapper-->

		<!--end top header wrapper-->
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--start breadcrumb-->
				<section class="py-3 border-bottom d-none d-md-flex">
					<div class="container">
						<div class="page-breadcrumb d-flex align-items-center">
							<h3 style="align-items: center;" class="breadcrumb-title pe-3">Sign Up</h3>
						</div>
					</div>
				</section>
				<!--end breadcrumb-->
				<!--start shop cart-->
				<section class="py-0 py-lg-5">
					<div class="container">
						<div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
							<div class="row row-cols-1 row-cols-lg-1 row-cols-xl-2">
								<div class="col mx-auto">
									<div class="card mb-0">
										<div class="card-body">
											<div class="border p-4 rounded">
												<div class="text-center">
													<h3 class="">Sign Up</h3>
													<p>Already have an account? <a href="signin.php">Sign in here</a>
													</p>
												</div>
												<div class="d-grid">
													<a class="btn my-4 shadow-sm btn-light" href="javascript:;"> <span class="d-flex justify-content-center align-items-center">
									  <img class="me-2" src="assets/images/icons/search.svg" width="16" alt="Image Description">
									  <span>Sign Up with Google</span>
														</span>
													</a> <a href="javascript:;" class="btn btn-light"><i class="bx bxl-facebook"></i>Sign Up with Facebook</a>
												</div>
												<div class="login-separater text-center mb-4"> <span>OR SIGN UP WITH EMAIL</span>
													<hr/>
												</div>
												<div class="form-body">
													<form class="row g-3" method="POST" enctype="multipart/form-data">
														<div class="col-sm-6">
															<label for="inputFirstName" class="form-label">First Name</label>
															<input type="text" class="form-control" id="inputFirstName" placeholder="Enter Your Name" name="name">
														</div>
														<div class="col-sm-6">
															<label for="inputLastName" class="form-label">Last Name</label>
															<input type="text" class="form-control" id="inputLastName" placeholder="Surname" name="surname">
														</div>

														<div class="col-12">
															<label for="inputEmailAddress" class="form-label">Image</label>
															<input type="file"  class="form-control" id="inputEmailAddress" placeholder="Select Image"
															name="image">
														</div>
														<div class="col-12">
															<label for="inputEmailAddress" class="form-label">Email Address</label>
															<input type="email" class="form-control" id="inputEmailAddress" placeholder="example@user.com"
															name="email">
														</div>
														<div class="col-12">
															<label for="inputChoosePassword" class="form-label">Password</label>
															<div class="input-group" id="show_hide_password">
																<input type="password" class="form-control border-end-0" id="inputChoosePassword" value="12345678" placeholder="Enter Password" name="password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
															</div>
														</div>
														<div class="col-12">
															<label for="inputSelectCountry" class="form-label">Country</label>
															<select name="country" class="form-select" id="inputSelectCountry" aria-label="Default select example">
																<option selected>Select Country</option>
																<option value="India">India</option>
																<option value="U.K.">United Kingdom</option>
																<option value="America">America</option>
																<option value="Dubai">Dubai</option>
															</select>
														</div>
														<div class="col-12">
															<div class="form-check form-switch">
																<input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
																<label class="form-check-label" for="flexSwitchCheckChecked">I read and agree to Terms & Conditions</label>
															</div>
														</div>
														<div class="col-12">
															<div class="d-grid">
																<button type="submit" class="btn btn-light" name="submit"><i class='bx bx-user'></i>Sign up</button>
															</div>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--end row-->
						</div>
					</div>
				</section>
				<!--end shop cart-->
			</div>
		</div>
		<!--end page wrapper -->
		<!--start footer section-->
		<!--end footer section-->
		<a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
	</div>
	<!--end wrapper-->
	<!--start switcher-->
	<div class="switcher-wrapper">
		<div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
		</div>
		<div class="switcher-body">
			<div class="d-flex align-items-center">
				<h5 class="mb-0 text-uppercase">Theme Customizer</h5>
				<button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
			</div>
			<hr/>
			<p class="mb-0">Gaussian Texture</p>
			<hr>
			<ul class="switcher">
				<li id="theme1"></li>
				<li id="theme2"></li>
				<li id="theme3"></li>
				<li id="theme4"></li>
				<li id="theme5"></li>
				<li id="theme6"></li>
			</ul>
			<hr>
			<p class="mb-0">Gradient Background</p>
			<hr>
			<ul class="switcher">
				<li id="theme7"></li>
				<li id="theme8"></li>
				<li id="theme9"></li>
				<li id="theme10"></li>
				<li id="theme11"></li>
				<li id="theme12"></li>
				<li id="theme13"></li>
				<li id="theme14"></li>
				<li id="theme15"></li>
			</ul>
		</div>
	</div>
	<!--end switcher-->
	<!-- Bootstrap JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="assets/plugins/OwlCarousel/js/owl.carousel.min.js"></script>
	<script src="assets/plugins/OwlCarousel/js/owl.carousel2.thumbs.min.js"></script>
	<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<!--app JS-->
	<script src="assets/js/app.js"></script>
	<!--Password show & hide js -->
	<script src="assets/js/show-hide-password.js"></script>
</body>


<!-- Mirrored from codervent.com/etrans/demo/authentication-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Aug 2024 14:27:30 GMT -->
</html>