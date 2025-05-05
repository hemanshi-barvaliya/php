<?php include_once 'header.php'; 

if (isset($_GET['blog_id']))
{
	$id = $_GET['blog_id'];
	$select = mysqli_query($connect,"select * from blog where id='$id'");
}

$blog_select = mysqli_query($connect,"select * from blog");

$blog_post = mysqli_query($connect,"select * from blog order by id DESC Limit 0,4");

if (isset($_GET['blog_id']) && isset($_POST['submit']))
{
	$b_id = $_GET['blog_id'];
	$comment = $_POST['comment'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$website = $_POST['url'];

	$insert = mysqli_query($connect,"insert into comment values('null','$b_id','$comment','$name','$email','$url')");
	header("location:single_blog.php?blog_id=$b_id");
}




?>
		<!--end top header wrapper-->
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--start breadcrumb-->
				<section class="py-3 border-bottom d-none d-md-flex">
					<div class="container">
						<div class="page-breadcrumb d-flex align-items-center">
							<h3 class="breadcrumb-title pe-3">Single Post</h3>
							<div class="ms-auto">
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb mb-0 p-0">
										<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i> Home</a>
										</li>
										<li class="breadcrumb-item"><a href="javascript:;">Blog</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">Single Post</li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
				</section>
				<!--end breadcrumb-->
				<!--start page content-->
				<section class="py-4">
					<div class="container">
						<div class="row">
							<div class="col-12 col-lg-9">
								<div class="blog-right-sidebar p-3">
									<div class="card shadow-none bg-transparent">
										<?php while ($blog_data=mysqli_fetch_assoc($select)) {
											$comment = mysqli_query($connect,"select * from comment where b_id=".$blog_data['id']);
											$count = mysqli_num_rows($comment);
											?>
										<img style="width: 799px; height: 347px;" src="admin/image/<?php echo $blog_data['image']; ?>" class="card-img-top" alt="">
										<div class="card-body p-0">
											<div class="list-inline mt-4">	<a href="javascript:;" class="list-inline-item"><i class='bx bx-user me-1'></i><?php echo $blog_data['name']; ?></a>
												<a href="javascript:;" class="list-inline-item"><i class='bx bx-comment-detail me-1'></i><?php echo "$count"; ?> Comments</a>
												<a href="javascript:;" class="list-inline-item"><i class='bx bx-calendar me-1'></i><?php echo $blog_data['date']; ?></a>
											</div>
											<h4 class="mt-4"><?php echo $blog_data['title']; ?></h4>
											<p><?php echo $blog_data['description']; ?></p>
											|<?php } ?>
											<div class="d-flex align-items-center gap-2 py-4 border-top border-bottom">
												<div class="">
													<h6 class="mb-0 text-uppercase">Share This Post</h6>
												</div>
												<div class="list-inline blog-sharing">	<a href="javascript:;" class="list-inline-item"><i class='bx bxl-facebook'></i></a>
													<a href="javascript:;" class="list-inline-item"><i class='bx bxl-twitter'></i></a>
													<a href="javascript:;" class="list-inline-item"><i class='bx bxl-linkedin'></i></a>
													<a href="javascript:;" class="list-inline-item"><i class='bx bxl-instagram'></i></a>
													<a href="javascript:;" class="list-inline-item"><i class='bx bxl-tumblr'></i></a>
												</div>
											</div>
											<div class="author d-flex align-items-center gap-3 py-4">
												<img src="assets/images/avatars/avatar-1.png" alt="" width="80">
												<div class="">
													<h6 class="mb-0">Jhon Doe</h6>
													<p class="mb-0">Donec egestas metus non vehicula accumsan. Pellentesque sit amet tempor nibh. Mauris in risus lorem. Cras malesuada gravida massa eget viverra. Suspendisse vitae dolor erat. Morbi id rhoncus enim. In hac habitasse platea dictumst. Aenean lorem diam, venenatis nec venenatis id, adipiscing ac massa.</p>
												</div>
											</div>
											<div class="reply-form p-4 border bg-dark-1">
												<h6 class="mb-0">Leave a Reply</h6>
												<p>Your email address will not be published. Required fields are marked *</p>
												<form method="post">
													<div class="mb-3">
														<label class="form-label">Comment</label>
														<textarea class="form-control" rows="4" placeholder="Enter Your Comment" name="comment"></textarea>
													</div>
													<div class="mb-3">
														<label class="form-label">Name</label>
														<input type="text" class="form-control" placeholder="Enter Your Name" name="name">
													</div>
													<div class="mb-3">
														<label class="form-label">Email</label>
														<input type="email" class="form-control" placeholder="example@gmail.com" name="email">
													</div>
													<div class="mb-3">
														<label class="form-label">Website</label>
														<input type="url" class="form-control" placeholder="https://example.com" name="url">
													</div>
													<div class="mb-3">
														<button type="submit" class="btn btn-light btn-ecomm" name="submit">Post Comment</button>
													</div>
												</form>
											</div>
										</div>
									</div>
									<div class="product-grid">
										<h5 class="text-uppercase mb-4">Latest Post</h5>
										<div class="latest-news owl-carousel owl-theme">
											<?php while ($res_blog=mysqli_fetch_assoc($blog_select)) {
												$com_post = mysqli_query($connect,"select * from comment where b_id=".$res_blog['id']);
												$cnt = mysqli_num_rows($com_post);
											 ?>
											<div class="item">
												<div class="card rounded-0 product-card border">
													<div class="news-date">
														<div class="date-number">24</div>
														<div class="date-month">FEB</div>
													</div>
													<a href="single_blog.php?blog_id=<?php echo $res_blog['id']; ?>">
														<img style="height: 225px; width: 258px;"src="admin/image/<?php echo $res_blog['image'] ?>" class="card-img-top border-bottom bg-dark-1" alt="...">
													</a>
													<div class="card-body">
														<div class="news-title">
															<a href="javascript:;">
																<h5 class="mb-3 text-capitalize"><?php echo $res_blog['title']; ?></h5>
															</a>
														</div>
														<p style="width: 245px; height: 46px;  overflow: hidden;" class="news-content mb-0"><?php echo $res_blog['description']; ?></p>
													</div>
													<div class="card-footer border-top">
														<a href="javascript:;">
															<p class="mb-0"><small class="text-white"><?php echo "$cnt"; ?> Comments</small>
															</p>
														</a>
													</div>
												</div>
											</div>	
											<?php } ?>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 col-lg-3">
								<div class="blog-left-sidebar p-3">
									<form>
										<div class="position-relative blog-search mb-3">
											<input type="text" class="form-control form-control-lg rounded-0 pe-5" placeholder="Serach posts here...">
											<div class="position-absolute top-50 end-0 translate-middle"><i class='bx bx-search fs-4 text-white'></i>
											</div>
										</div>
										<div class="blog-categories mb-3">
											<h5 class="mb-4">Blog Categories</h5>
											<div class="list-group list-group-flush"> <a href="javascript:;" class="list-group-item bg-transparent"><i class='bx bx-chevron-right me-1'></i> Fashion</a>
												<a href="javascript:;" class="list-group-item bg-transparent"><i class='bx bx-chevron-right me-1'></i> Electronis</a>
												<a href="javascript:;" class="list-group-item bg-transparent"><i class='bx bx-chevron-right me-1'></i> Accessories</a>
												<a href="javascript:;" class="list-group-item bg-transparent"><i class='bx bx-chevron-right me-1'></i> Kitchen & Table</a>
												<a href="javascript:;" class="list-group-item bg-transparent"><i class='bx bx-chevron-right me-1'></i> Furniture</a>
											</div>
										</div>
										<div class="blog-categories mb-3">
											<h5 class="mb-4">Recent Posts</h5>
											<?php while ($res_post=mysqli_fetch_assoc($blog_post)) {?>
											<div class="d-flex align-items-center">
												<img style="width: 75px; height: 75px;" src="admin/image/<?php echo $res_post['image'] ?>" width="75" alt="">
												<div class="ms-3"> <a href="single_blog.php?blog_id=<?php echo $res_post['id']; ?>" class="fs-6"><?php echo $res_post['title']; ?></a>
													<p class="mb-0"><?php echo $res_post['date']; ?></p>
												</div>
											</div>
											<div class="my-3 border-bottom"></div>
											<?php } ?>
										</div>
										<div class="blog-categories mb-3">
											<h5 class="mb-4">Popular Tags</h5>
											<div class="tags-box">	<a href="javascript:;" class="tag-link">Cloths</a>
												<a href="javascript:;" class="tag-link">Electronis</a>
												<a href="javascript:;" class="tag-link">Furniture</a>
												<a href="javascript:;" class="tag-link">Sports</a>
												<a href="javascript:;" class="tag-link">Men Wear</a>
												<a href="javascript:;" class="tag-link">Women Wear</a>
												<a href="javascript:;" class="tag-link">Laptops</a>
												<a href="javascript:;" class="tag-link">Formal Shirts</a>
												<a href="javascript:;" class="tag-link">Topwear</a>
												<a href="javascript:;" class="tag-link">Headphones</a>
												<a href="javascript:;" class="tag-link">Bottom Wear</a>
												<a href="javascript:;" class="tag-link">Bags</a>
												<a href="javascript:;" class="tag-link">Sofa</a>
												<a href="javascript:;" class="tag-link">Shoes</a>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						<!--end row-->
					</div>
				</section>
				<!--end start page content-->
			</div>
		</div>
		<!--end page wrapper -->
		<!--start footer section-->

<?php include_once 'footer.php'; ?>