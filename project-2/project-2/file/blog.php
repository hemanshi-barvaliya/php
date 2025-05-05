<?php include_once 'header.php';


$blog = "select * from blog order by id DESC Limit 0,2";
$select_blog=mysqli_query($con,$blog);

$blog_post=mysqli_query($con,"select * from comment order by id DESC Limit 0,3");
?>		

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
							<div class="col-12 col-lg-12">
								<div class="blog-right-sidebar p-3">
								<?php while ($data=mysqli_fetch_assoc($select_blog)) { 
										
										?>
									<div class="card">
										<img style="width: 750px; height: 500px;" src="../admin/image/<?php echo $data ['image'] ?>" class="card-img-top" alt="">
										<div class="card-body">
											<div class="list-inline">	<a href="javascript:;" class="list-inline-item"><i class='bx bx-user me-1'></i><?php echo $data['name']; ?></a>
												
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
						</div>
						<!--end row-->
					</div>
				</section>
				<!--end start page content-->
			</div>
		</div>
		<!--end page wrapper -->
		<!--start footer section-->
<?php include_once'footer.php'; ?>