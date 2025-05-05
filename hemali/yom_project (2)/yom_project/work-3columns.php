
<?php include 'header.php'; ?>

<?php 

include 'admin/db.php';

$cat_sel = "select *from category";

$cat_data = mysqli_query($con,$cat_sel);

$post_data = mysqli_query($con,"select *from post");

 ?>

				<section class="page-heading wow fadeIn" data-wow-duration="1.5s" style="background-image: url(files/images/01-heading.jpg)">
					<div class="container">
						<div class="page-name">
							<h1>Latest Photos</h1>
							<span>Lovely layout of heading</span>
						</div>
					</div>
				</section>

				<section class="portfolio on-portfolio">
					<div class="container">
						<div class="col-sm-12 text-center">
							<div id="projects-filter">
								<a href="#" data-filter="*" class="active">show all </a>
								<?php while ($cat_rec = mysqli_fetch_assoc($cat_data)) { ?>
								
								<a href="#" data-filter=".<?php echo $cat_rec['name']; ?>"><?php echo $cat_rec['name']; ?></a>
							<?php } ?>
							</div>
						</div>
						<div class="row">
							<div class="row" id="portfolio-grid">
								<?php while ($post_re = mysqli_fetch_assoc($post_data)) { ?>
								<div class="item col-md-4 col-sm-6 col-xs-12 <?php echo $post_re['category']; ?>">
							  		<figure>
			        					<img alt="1-image" src="admin/images/<?php echo $post_re['image'] ?>">
			        					<figcaption>
			            					<h3><?php echo $post_re['post_name']; ?></h3>
			            					<p><?php echo $post_re['post_des']; ?></p>
			        					</figcaption>
			    					</figure>	
							    </div>
							    	<?php } ?>
							</div>
						</div>
						<!-- <div class="col-md-12">
							<div class="portfolio-page-nav text-center">
								<ul>
									<li><a href="#" class="current">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
								</ul>
							</div>
						</div> -->
					</div>
				</section>
                

       <?php include 'footer.php'; ?>