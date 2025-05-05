<?php include 'admin/db.php'; ob_start(); 

if (!isset($_SESSION['user_id'])) 
{
	header('location:signin.php');
}

$sel_cat = mysqli_query($connect,"select * from catergory"); 

if (isset($_GET['cat_id']))
{
	$id=$_GET['cat_id'];
	$cat_sel = mysqli_query($connect,"select product.* , catergory.name as cat_name FROM product INNER JOIN catergory ON product.catergory = catergory.id where product.catergory=$id");
}

?>

<!doctype html>
<html lang="en">


<!-- Mirrored from codervent.com/etrans/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Aug 2024 14:24:38 GMT -->
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
						<div class="shiping-title text-uppercase font-13 text-white d-none d-sm-flex">Welcome to our eTrans store!</div>
						<ul class="navbar-nav ms-auto d-none d-lg-flex">
							<li class="nav-item"> <a class="nav-link" href="order-tracking.html">Track Order</a>
							</li>
							<li class="nav-item"> <a class="nav-link" href="about-us.html">About</a>
							</li>
							<li class="nav-item"> <a class="nav-link" href="shop-categories.html">Our Stores</a>
							</li>
							<li class="nav-item"> <a class="nav-link" href="blog.html">Blog</a>
							</li>
							<li class="nav-item">	<a class="nav-link" href="contact-us.html">Contact</a>
							</li>
							<li class="nav-item">	<a class="nav-link" href="javascript:;">Help & FAQs</a>
							</li>
						</ul>
						<ul class="navbar-nav">
							<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">USD</a>
								<ul class="dropdown-menu dropdown-menu-lg-end">
									<li><a class="dropdown-item" href="#">USD</a>
									</li>
									<li><a class="dropdown-item" href="#">EUR</a>
									</li>
								</ul>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
									<div class="lang d-flex gap-1">
										<div><i class="flag-icon flag-icon-um"></i>
										</div>
										<div><span>ENG</span>
										</div>
									</div>
								</a>
								<div class="dropdown-menu dropdown-menu-lg-end">
									<a class="dropdown-item d-flex allign-items-center" href="javascript:;"> <i class="flag-icon flag-icon-de me-2"></i><span>German</span>
									</a>	<a class="dropdown-item d-flex allign-items-center" href="javascript:;"><i
								class="flag-icon flag-icon-fr me-2"></i><span>French</span></a>
									<a class="dropdown-item d-flex allign-items-center" href="javascript:;"><i
								class="flag-icon flag-icon-um me-2"></i><span>English</span></a>
									<a class="dropdown-item d-flex allign-items-center" href="javascript:;"><i
								class="flag-icon flag-icon-in me-2"></i><span>Hindi</span></a>
									<a class="dropdown-item d-flex allign-items-center" href="javascript:;"><i
								class="flag-icon flag-icon-cn me-2"></i><span>Chinese</span></a>
									<a class="dropdown-item d-flex allign-items-center" href="javascript:;"><i
						        class="flag-icon flag-icon-ae me-2"></i><span>Arabic</span></a>
								</div>
							</li>
						</ul>
						<ul class="navbar-nav social-link ms-lg-2 ms-auto">
							<li class="nav-item"> <a class="nav-link" href="javascript:;"><i class='bx bxl-facebook'></i></a>
							</li>
							<li class="nav-item"> <a class="nav-link" href="javascript:;"><i class='bx bxl-twitter'></i></a>
							</li>
							<li class="nav-item"> <a class="nav-link" href="javascript:;"><i class='bx bxl-linkedin'></i></a>
							</li>
						</ul>
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
							<div class="input-group flex-nowrap px-xl-4">
								<input type="text" class="form-control w-100" placeholder="Search for Products">
								<select class="form-select flex-shrink-0" aria-label="Default select example" style="width: 10.5rem;">
									<option selected>All Categories</option>
									<option value="1">One</option>
									<option value="2">Two</option>
									<option value="3">Three</option>
								</select>	<span class="input-group-text cursor-pointer"><i class='bx bx-search'></i></span>
							</div>
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
										<li class="nav-item"><a href="account-dashboard.html" class="nav-link cart-link"><i class='bx bx-user'></i></a>
										</li>
										<li class="nav-item"><a href="wishlist.html" class="nav-link cart-link"><i class='bx bx-heart'></i></a>
										</li>
										<li class="nav-item dropdown dropdown-large">
											<a href="#" class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative cart-link" data-bs-toggle="dropdown">	<span class="alert-count">8</span>
												<i class='bx bx-shopping-bag'></i>
											</a>
											<div class="dropdown-menu dropdown-menu-end">
												<a href="shop_cart.php">
													<div class="cart-header">
														<p class="cart-header-title mb-0">8 ITEMS</p>
														<p class="cart-header-clear ms-auto mb-0">VIEW CART</p>
													</div>
												</a>
												<div class="cart-list">
													<a class="dropdown-item" href="javascript:;">
														<div class="d-flex align-items-center">
															<div class="flex-grow-1">
																<h6 class="cart-product-title">Men White T-Shirt</h6>
																<p class="cart-product-price">1 X $29.00</p>
															</div>
															<div class="position-relative">
																<div class="cart-product-cancel position-absolute"><i class='bx bx-x'></i>
																</div>
																<div class="cart-product">
																	<img src="assets/images/products/01.png" class="" alt="product image">
																</div>
															</div>
														</div>
													</a>
													<a class="dropdown-item" href="javascript:;">
														<div class="d-flex align-items-center">
															<div class="flex-grow-1">
																<h6 class="cart-product-title">Puma Sports Shoes</h6>
																<p class="cart-product-price">1 X $29.00</p>
															</div>
															<div class="position-relative">
																<div class="cart-product-cancel position-absolute"><i class='bx bx-x'></i>
																</div>
																<div class="cart-product">
																	<img src="assets/images/products/05.png" class="" alt="product image">
																</div>
															</div>
														</div>
													</a>
													<a class="dropdown-item" href="javascript:;">
														<div class="d-flex align-items-center">
															<div class="flex-grow-1">
																<h6 class="cart-product-title">Women Red Sneakers</h6>
																<p class="cart-product-price">1 X $29.00</p>
															</div>
															<div class="position-relative">
																<div class="cart-product-cancel position-absolute"><i class='bx bx-x'></i>
																</div>
																<div class="cart-product">
																	<img src="assets/images/products/17.png" class="" alt="product image">
																</div>
															</div>
														</div>
													</a>
													<a class="dropdown-item" href="javascript:;">
														<div class="d-flex align-items-center">
															<div class="flex-grow-1">
																<h6 class="cart-product-title">Black Headphone</h6>
																<p class="cart-product-price">1 X $29.00</p>
															</div>
															<div class="position-relative">
																<div class="cart-product-cancel position-absolute"><i class='bx bx-x'></i>
																</div>
																<div class="cart-product">
																	<img src="assets/images/products/10.png" class="" alt="product image">
																</div>
															</div>
														</div>
													</a>
													<a class="dropdown-item" href="javascript:;">
														<div class="d-flex align-items-center">
															<div class="flex-grow-1">
																<h6 class="cart-product-title">Blue Girl Shoes</h6>
																<p class="cart-product-price">1 X $29.00</p>
															</div>
															<div class="position-relative">
																<div class="cart-product-cancel position-absolute"><i class='bx bx-x'></i>
																</div>
																<div class="cart-product">
																	<img src="assets/images/products/08.png" class="" alt="product image">
																</div>
															</div>
														</div>
													</a>
													<a class="dropdown-item" href="javascript:;">
														<div class="d-flex align-items-center">
															<div class="flex-grow-1">
																<h6 class="cart-product-title">Men Leather Belt</h6>
																<p class="cart-product-price">1 X $29.00</p>
															</div>
															<div class="position-relative">
																<div class="cart-product-cancel position-absolute"><i class='bx bx-x'></i>
																</div>
																<div class="cart-product">
																	<img src="assets/images/products/18.png" class="" alt="product image">
																</div>
															</div>
														</div>
													</a>
													<a class="dropdown-item" href="javascript:;">
														<div class="d-flex align-items-center">
															<div class="flex-grow-1">
																<h6 class="cart-product-title">Men Yellow T-Shirt</h6>
																<p class="cart-product-price">1 X $29.00</p>
															</div>
															<div class="position-relative">
																<div class="cart-product-cancel position-absolute"><i class='bx bx-x'></i>
																</div>
																<div class="cart-product">
																	<img src="assets/images/products/04.png" class="" alt="product image">
																</div>
															</div>
														</div>
													</a>
													<a class="dropdown-item" href="javascript:;">
														<div class="d-flex align-items-center">
															<div class="flex-grow-1">
																<h6 class="cart-product-title">Pool Charir</h6>
																<p class="cart-product-price">1 X $29.00</p>
															</div>
															<div class="position-relative">
																<div class="cart-product-cancel position-absolute"><i class='bx bx-x'></i>
																</div>
																<div class="cart-product">
																	<img src="assets/images/products/16.png" class="" alt="product image">
																</div>
															</div>
														</div>
													</a>
												</div>
												<a href="javascript:;">
													<div class="text-center cart-footer d-flex align-items-center">
														<h5 class="mb-0">TOTAL</h5>
														<h5 class="mb-0 ms-auto">$189.00</h5>
													</div>
												</a>
												<div class="d-grid p-3 border-top">	<a href="javascript:;" class="btn btn-light btn-ecomm">CHECKOUT</a>
												</div>
											</div>
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
										<div class="col-md-6">
											<h6 class="large-menu-title">Fashion</h6>
											<ul class="">
												<?php while ($res_cat=mysqli_fetch_assoc($sel_cat)) {?>
												<li><a href="product_list.php?cat_id=<?php echo $res_cat['id']; ?>"><?php echo $res_cat['name']; ?></a>
												</li>
												<?php } ?>
												<!-- <li><a href="#">Formal Shirts</a>
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
							<li class="nav-item dropdown">	<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">Shop  <i class='bx bx-chevron-down'></i></a>
								<ul class="dropdown-menu">
									<li><a class="dropdown-item dropdown-toggle dropdown-toggle-nocaret" href="#">Shop Layouts <i class='bx bx-chevron-right float-end'></i></a>
										<ul class="submenu dropdown-menu">
											<li><a class="dropdown-item" href="product_list.php">Shop Grid - Left Sidebar</a>
											</li>
											<li><a class="dropdown-item" href="shop-grid-right-sidebar.html">Shop Grid - Right Sidebar</a>
											</li>
											<li><a class="dropdown-item" href="shop-list-left-sidebar.html">Shop List - Left Sidebar</a>
											</li>
											<li><a class="dropdown-item" href="shop-list-right-sidebar.html">Shop List - Right Sidebar</a>
											</li>
											<li><a class="dropdown-item" href="shop-grid-filter-on-top.html">Shop Grid - Top Filter</a>
											</li>
											<li><a class="dropdown-item" href="shop-list-filter-on-top.html">Shop List - Top Filter</a>
											</li>
										</ul>
									</li>
									<li><a class="dropdown-item dropdown-toggle dropdown-toggle-nocaret" href="#">Shop Pages <i class='bx bx-chevron-right float-end'></i></a>
										<ul class="submenu dropdown-menu">
											<li><a class="dropdown-item" href="shop_cart.php">Shop Cart</a>
											</li>
											<li><a class="dropdown-item" href="shop-categories.php">Shop Categories</a>
											</li>
											<li><a class="dropdown-item" href="checkout-details.php">Checkout Details</a>
											</li>
											<li><a class="dropdown-item" href="checkout-shipping.php">Checkout Shipping</a>
											</li>
											<li><a class="dropdown-item" href="checkout-payment.php">Checkout Payment</a>
											</li>
											<li><a class="dropdown-item" href="checkout-review.php">Checkout Review</a>
											</li>
											<li><a class="dropdown-item" href="checkout-complete.php">Checkout Complete</a>
											</li>
											<li><a class="dropdown-item" href="order-tracking.php">Order Tracking</a>
											</li>
											<li><a class="dropdown-item" href="product-comparison.php">Product Comparison</a>
											</li>
										</ul>
									</li>
									<li><a class="dropdown-item" href="about-us.php">About Us</a>
									</li>
									<li><a class="dropdown-item" href="contact-us.php">Contact Us</a>
									</li>
									<li><a class="dropdown-item" href="signin.php">Sign In</a>
									</li>
									<li><a class="dropdown-item" href="signup.php">Sign Up</a>
									</li>
									<li><a class="dropdown-item" href="forgot-password.php">Forgot Password</a>
									</li>
								</ul>
							</li>
							<li class="nav-item"> <a class="nav-link" href="blog.php">Blog </a> 
							</li>
							<li class="nav-item"> <a class="nav-link" href="about-us.php">About Us </a> 
							</li>
							<li class="nav-item"> <a class="nav-link" href="contact-us.php">Contact Us </a> 
							</li>
							<li class="nav-item"> <a class="nav-link" href="shop-categories.php">Our Store</a> 
							</li>
							<li class="nav-item dropdown">	<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">My Account  <i class='bx bx-chevron-down'></i></a>
								<ul class="dropdown-menu">
									<li><a class="dropdown-item" href="dashboard.php">Dashboard</a>
									</li>
									<li><a class="dropdown-item" href="downloads.php">Downloads</a>
									</li>
									<li><a class="dropdown-item" href="orders.php">Orders</a>
									</li>
									<li><a class="dropdown-item" href="account-payment-methods.php">Payment Methods</a>
									</li>
									<li><a class="dropdown-item" href="user_details.php">User Details</a>
									</li>
								</ul>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>