<?php include_once 'header.php';

$select_blog=mysqli_query($connect,"select * from blog order by id DESC Limit 0,2");

$blog_post=mysqli_query($connect,"select * from blog order by id DESC Limit 0,3");

if (isset($_GET['blog_id'])) 
{
	$blog_id=$_GET['blog_id'];
	$blog_select=mysqli_query($connect,"select * from blog where id=".$blog_id);
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
							<div class="breadcrumb-title pe-3">Blog</div>
							<div class="ms-auto">
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb mb-0 p-0">
										<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i> Home</a>
										</li>
										<li class="breadcrumb-item"><a href="javascript:;">Blog</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">Blog Posts</li>
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
									<?php while ($data=mysqli_fetch_assoc($select_blog)) { 
										$comment = mysqli_query($connect,"select * from comment where b_id=".$data['id']);
										$count = mysqli_num_rows($comment);
										?>
									<div class="card">
										<img style="width: 799px; height: 346px;" src="admin/image/<?php echo $data ['image'] ?>" class="card-img-top" alt="">
										<div class="card-body">
											<div class="list-inline">	<a href="javascript:;" class="list-inline-item"><i class='bx bx-user me-1'></i><?php echo $data['name']; ?></a>
												<a href="javascript:;" class="list-inline-item"><i class='bx bx-comment-detail me-1'></i><?php echo "$count"; ?> Comments</a>
												<a href="javascript:;" class="list-inline-item"><i class='bx bx-calendar me-1'></i><?php echo $data['date']; ?></a>
											</div>
											<h4 class="mt-4"><?php echo $data['title']; ?></h4>
											<p><?php echo $data ['description']; ?></p>	<a href="single_blog.php?blog_id=<?php echo $data['id'] ?>" class="btn btn-light btn-ecomm">Read More <i class='bx bx-chevrons-right' ></i></a>
										</div>
									</div>
									<?php } ?>
									
									<hr>
									<nav class="d-flex justify-content-between" aria-label="Page navigation">
										<ul class="pagination">
											<li class="page-item"><a class="page-link" href="javascript:;"><i class="bx bx-chevron-left"></i> Prev</a>
											</li>
										</ul>
										<ul class="pagination">
											<li class="page-item active d-none d-sm-block" aria-current="page"><span class="page-link">1<span class="visually-hidden">(current)</span></span>
											</li>
											<li class="page-item d-none d-sm-block"><a class="page-link" href="javascript:;">2</a>
											</li>
											<li class="page-item d-none d-sm-block"><a class="page-link" href="javascript:;">3</a>
											</li>
											<li class="page-item d-none d-sm-block"><a class="page-link" href="javascript:;">4</a>
											</li>
											<li class="page-item d-none d-sm-block"><a class="page-link" href="javascript:;">5</a>
											</li>
										</ul>
										<ul class="pagination">
											<li class="page-item"><a class="page-link" href="javascript:;" aria-label="Next">Next <i class="bx bx-chevron-right"></i></a>
											</li>
										</ul>
									</nav>
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
											<?php while ($post_data=mysqli_fetch_assoc($blog_post)) {?>
											<div class="d-flex align-items-center">
												<img style="width: 75px; height: 75px;" src="admin/image/<?php echo $post_data['image'] ?>" width="75" alt="">
												<div class="ms-3"> <a href="single_blog.php?blog_id=<?php echo $post_data['id']; ?>" class="fs-6"><?php echo $post_data['title']; ?></a>
													<p class="mb-0"><?php echo $post_data['date']; ?></p>
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