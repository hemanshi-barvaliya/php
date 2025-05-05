<?php include_once '../admin/db.php';
ob_start();  

if (!isset($_SESSION['user_id'])) 
{
	header('location:signin.php');
}
$sel_cat = mysqli_query($con,"select * from category"); 

if (isset($_GET['cat_id']))
{
	$id=$_GET['cat_id'];

	$cat_sel = mysqli_query($con,"select product.* , category.name as name FROM product INNER JOIN category ON product.category = category.id where product.category=$id");
}

	if(isset($_GET['srch']))
	{
		$srch = $_GET['srch'];
		if($srch=="")
		{
			header("location:index.php");

		}
		
	}
	else
	{
		$srch = "";

	}

	
	
	$query = "select * from product where name like '%$srch%'";
	 
	$result = mysqli_query($con,$query);

?>


<!doctype html>
<html lang="en">


<!-- Mirrored from codervent.com/etrans/demo/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Aug 2024 14:24:38 GMT -->
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

<body class="bg-theme bg-theme1">

	<b class="screen-overlay"></b>
	<!--wrapper-->
	<div class="wrapper">
		<div class="discount-alert bg-dark-1 d-none d-lg-block">
			<div class="alert alert-dismissible fade show shadow-none rounded-0 mb-0 border-bottom">
				<div class="d-lg-flex align-items-center gap-2 justify-content-center">
					<p class="mb-0 text-white">Get Up to <strong>40% OFF</strong> New-Season Styles</p>	<a href="javascript:;" class="bg-dark text-white px-1 font-13 cursor-pointer">Men</a>
					<a href="javascript:;" class="bg-dark text-white px-1 font-13 cursor-pointer">Women</a>
					<p class="mb-0 font-13 text-light-3">*Limited time only</p>
				</div>
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
		</div>
		<!--start top header wrapper-->
		<div class="header-wrapper bg-dark-1">
			<div class="top-menu border-bottom">
				<div class="container">
					<nav class="navbar navbar-expand">
					    <div class="shiping-title text-uppercase font-13 text-white d-none d-sm-flex justify-content-center w-100">
					        Welcome to our eTrans store!
					    </div>
					</nav>
				</div>
			</div>
			<div class="header-content pb-3 pb-md-0">
				<div class="container">
					<div class="row align-items-center">
						<div class="col col-md-auto">
							<div class="d-flex align-items-center">
								<div class="mobile-toggle-menu d-lg-none px-lg-2" data-trigger="#navbar_main"><i class='bx bx-menu'></i>
								</div>
								<div class="logo d-none d-lg-flex">
									<a href="index.php">
										<img src="assets/images/logo-icon.png" class="logo-icon" alt="" />
									</a>
								</div>
							</div>
						</div>
						
						<div class="col-12 col-md order-4 order-md-2">
							<form method="GET">
							<div class="input-group flex-nowrap px-xl-4">
								<input type="text" name="srch" class="form-control w-100" placeholder="Search for Products">
								<input type="submit" name="submit" class="form-select " value="Search" style="width: 10.5rem;">
								<!-- <span class="input-group-text cursor-pointer"> -->
									<!-- <i class='bx bx-search'></i></span> -->
							</div>
							</form>
						</div>
						
						<div class="col col-md-auto order-3 d-none d-xl-flex align-items-center">
							<div class="fs-1 text-white"><i class='bx bx-headphone'></i>
							</div>
							<div class="ms-2">
								<p class="mb-0 font-13">CALL US NOW</p>
								<h5 class="mb-0">+011 5827918</h5>
							</div>
						</div>
						<div class="col col-md-auto order-2 order-md-4">
							<div class="top-cart-icons">
								<nav class="navbar navbar-expand">
									<ul class="navbar-nav ms-auto">
										<li class="nav-item"><a href="logout.php" class="nav-link cart-link"><i class='bx bx-user'></i></a>
										</li>
										<li class="nav-item"><a href="wishlist.php" class="nav-link cart-link"><i class='bx bx-heart'></i></a></i>
										</li>
										<li class="nav-item"><a href="addtocart.php" class="nav-link cart-link"><i class='bx bx-shopping-bag'></i></a>
										</li>
										
									</ul>
								</nav>
							</div>
						</div>
					</div>
					<!--end row-->
				</div>
			</div>
			<div class="primary-menu border-top">
				<div class="container">
					<nav id="navbar_main" class="mobile-offcanvas navbar navbar-expand-lg">
						<div class="offcanvas-header">
							<button class="btn-close float-end"></button>
							<h5 class="py-2 text-white">Navigation</h5>
						</div>
						<ul class="navbar-nav">
							<li class="nav-item active"> <a class="nav-link" href="index.php">Home </a> 
							</li>
							<li class="nav-item dropdown">	<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">Categories <i class='bx bx-chevron-down'></i></a>
								<div class="dropdown-menu dropdown-large-menu">
									<div class="row">
										<div class="col-md-4">
											<h6 class="large-menu-title">Fashion</h6>
											<ul class="">
												<?php while ($res_cat=mysqli_fetch_assoc($sel_cat)) {?>
												<li><a href="product_list.php?cat_id=<?php echo $res_cat['id']; ?>"><?php echo $res_cat['name']; ?></a>
												</li>
												<?php } ?>
											<!-- 	<li><a href="#">Formal Shirts</a>
												</li>
												<li><a href="#">Jackets</a>
												</li>
												<li><a href="#">Jeans</a>
												</li>
												<li><a href="#">Dresses</a>
												</li>
												<li><a href="#">Sneakers</a>
												</li>
												<li><a href="#">Belts</a>
												</li>
												<li><a href="#">Sports Shoes</a>
												</li> -->
											</ul>
										</div>
										<!-- end col-3 -->
										<!-- <div class="col-md-4">
											<h6 class="large-menu-title">Electronics</h6>
											<ul class="">
												<li><a href="#">Mobiles</a>
												</li>
												<li><a href="#">Laptops</a>
												</li>
												<li><a href="#">Macbook</a>
												</li>
												<li><a href="#">Televisions</a>
												</li>
												<li><a href="#">Lighting</a>
												</li>
												<li><a href="#">Smart Watch</a>
												</li>
												<li><a href="#">Galaxy Phones</a>
												</li>
												<li><a href="#">PC Monitors</a>
												</li>
											</ul>
										</div> -->
										<!-- end col-3 -->
										<div class="col-md-6">
											<div class="pramotion-banner1">
												<img src="assets/images/gallery/menu-img.jpg" class="img-fluid" alt="" />
											</div>
										</div>
										<!-- end col-3 -->
									</div>
									<!-- end row -->
								</div>
								<!-- dropdown-large.// -->
							</li>
							<li class="nav-item"> <a class="nav-link" href="signin.php">Shop </a> 
							</li>
							<li class="nav-item"> <a class="nav-link" href="blog.php">Blog </a> 
							</li>
							<li class="nav-item"> <a class="nav-link" href="about-us.php">About Us </a> 
							</li>
							<li class="nav-item"> <a class="nav-link" href="contact-us.php">Contact Us </a> 
							</li>
							<li class="nav-item"> <a class="nav-link" href="index.php">Our Store</a> 
							</li>
							
						</ul>
					</nav>
				</div>
			</div>
		</div>

	