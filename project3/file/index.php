<?php
include_once '../admin/db.php';

$slider_select = "select * from slider";
$slider_data = mysqli_query($con,$slider_select);


$offer_select = "SELECT * FROM offer ORDER BY id DESC LIMIT 3";
$offer_data = mysqli_query($con,$offer_select);

$post_select = "select * from post ORDER BY id DESC";
$post_data = mysqli_query($con,$post_select);

$latest_post = mysqli_query($con,"select *from post");


$category_select = "select * from category";
$category_data = mysqli_query($con,$category_select);

		

?>

<!DOCTYPE html>
<!--[if IE 9]>
<html class="ie ie9" lang="en-US">
<![endif]-->
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<title>YOM- Multipurpose HTML Theme</title>


	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="files/css/bootstrap.css">
	<link rel="stylesheet" href="files/css/animate.css">
	<link rel="stylesheet" href="files/css/simple-line-icons.css">
	<link rel="stylesheet" href="files/css/font-awesome.min.css">
	<link rel="stylesheet" href="files/css/style.css">
	<link rel="stylesheet" href="files/rs-plugin/css/settings.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->

</head>
<body>

	
	<div class="sidebar-menu-container" id="sidebar-menu-container">

		<div class="sidebar-menu-push">

			<div class="sidebar-menu-overlay"></div>

			<div class="sidebar-menu-inner">

				<?php include_once 'header.php' ?>

				<div class="slider">
					<div class="fullwidthbanner-container">
						<div class="fullwidthbanner">
						
							<ul>
								<?php while($row = mysqli_fetch_assoc($slider_data)) { ?>
                                    <li class="first-slide" data-transition="fade" data-slotamount="10" data-masterspeed="300">
                                        <img src="../admin/image/<?php echo $row['image']; ?>" data-fullwidthcentering="on" alt="slide">
                                        <div class="tp-caption first-line lft tp-resizeme start" data-x="center" data-hoffset="0" data-y="250" data-speed="1000" data-start="200" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0"><?php
                                    	echo $row['name'];?></div>
                                        <div class="tp-caption second-line lfb tp-resizeme start" data-x="center" data-hoffset="0" data-y="340" data-speed="1000" data-start="800" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0"><?php
                                    	echo $row['description'];?></div>
                                        <div class="tp-caption slider-btn sfb tp-resizeme start" data-x="center" data-hoffset="0" data-y="510" data-speed="1000" data-start="2200" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0"><a href="#" class="btn btn-slider">Discover More</a></div>
                                    </li>
                                <?php } ?>
							</ul>
					
						</div>
					</div>
				</div>
				
				

				<section class="services green">
					<div class="container">
						<div class="section-heading">
							<h2>What We Offer</h2>
							<div class="section-dec"></div>
						</div>
						<?php while($offer_res = mysqli_fetch_assoc($offer_data)) { ?>
						<div class="service-item col-md-4">
							<span><i class="fa-solid <?php echo $offer_res['icon']; ?>"></i></span>
							<div class="tittle">
								<h3><?php echo $offer_res['title'];?></h3>
							</div>
							<p><?php echo $offer_res['description'];?></p>
						</div>
						<?php } ?>
						<!-- <div class="service-item col-md-4">
							<span><i class="fa fa-cogs"></i></span>
							<div class="tittle"><h3>Fully Responsive</h3></div>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum nam numquam voluptates cumque inventore, quibusdam corporis consequatur amet.</p>
						</div>
						<div class="service-item col-md-4">
							<span><i class="fa fa-eye"></i></span>
							<div class="tittle"><h3>Retina Ready</h3></div>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum nam numquam voluptates cumque inventore, quibusdam corporis consequatur amet.</p>
						</div> -->
					</div>
				</section>
	
				<section class="call-to-action-1">
					<div class="container">
						<h4>Over 3000 people already downloaded YOM</h4>
						<p class="col-md-10 col-md-offset-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat quod voluptate consequuntur ad quasi, dolores obcaecati ex aliquid, dolor provident accusamus omnis dolorum ipsam. Voluptatem ipsum expedita, corporis facilis laborum asperiores nostrum! Amet porro numquam ratione temporibus quia dolorem sint lorem voluptates quasi mollitia.</p>
						<div class="buttons">
							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="border-btn"><a href="#">Learn More</a></div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="btn-black"><a href="#">Buy This Theme</a></div>
							</div>
						</div>
					</div>	
				</section>
				

				<section class="call-to-action-2">
					<div class="container">
					<div class="left-text hidden-xs">
						<h4>To know about this theme read this</h4>
						<p><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi ut explicabo magni sapiente.</em><br><br>Inventore at quia, vel in repellendus, cumque dolorem autem ad quidem mollitia porro blanditiis atque rerum debitis eveniet nostrum aliquam. Sint aperiam expedita sapiente amet officia quis perspiciatis adipisci, iure dolorem esse exercitationem!</p>
					</div>
						<div class="right-image hidden-xs"></div>
					</div>
				</section>

				<section class="portfolio">
					<div class="container">
						<div class="section-heading-white">
							<h2>Recent Photos</h2>
							<div class="section-dec"></div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div id="owl-portfolio" class="owl-carousel owl-theme">
									<?php while($post_res = mysqli_fetch_assoc($post_data)){ ?>
				    			
								    <div class="item">
								  		<figure>
				        					<img src="../admin/image/<?php echo $post_res['image']; ?>">
				        					<figcaption>
				            					<h3><?php echo $post_res['title']; ?></h3>
				            					<p><?php echo $post_res['description']; ?></p>
				        					</figcaption>
				    					</figure>								    
				    				</div>
				    				<?php } ?>
								    <!-- <div class="item">
								  		<figure>
				        					<img alt="portfolio" src="files/images/03-portfolio.jpg">
				        					<figcaption>
				            					<h3>Synth Thundercats</h3>
				            					<p>Lorem ipsum dolor sit amet consectetur.</p>
				        					</figcaption>
				    					</figure>								    
				    				</div> -->
								   <!--  <div class="item">
								  		<figure>
				        					<img alt="portfolio" src="files/images/04-portfolio.jpg">
				        					<figcaption>
				            					<h3>Bushwick Letterpress</h3>
				            					<p>Lorem ipsum dolor sit amet consectetur.</p>
				        					</figcaption>
				    					</figure>								    
				    				</div>
				    				<div class="item">
								  		<figure>
				        					<img alt="portfolio" src="files/images/05-portfolio.jpg">
				        					<figcaption>
				            					<h3>Fashion Heirloom</h3>
				            					<p>Lorem ipsum dolor sit amet consectetur.</p>
				        					</figcaption>
				    					</figure>								    
				    				</div>
								    <div class="item">
								  		<figure>
				        					<img alt="portfolio" src="files/images/06-portfolio.jpg">
				        					<figcaption>
				            					<h3>Locavore Brooklyn</h3>
				            					<p>Lorem ipsum dolor sit amet consectetur.</p>
				        					</figcaption>
				    					</figure>								    
				    				</div>
				    				<div class="item">
								  		<figure>
				        					<img alt="portfolio" src="files/images/07-portfolio.jpg">
				        					<figcaption>
				            					<h3>Meggings Mixtape</h3>
				            					<p>Lorem ipsum dolor sit amet consectetur.</p>
				        					</figcaption>
				    					</figure>								    
				    				</div>
								    <div class="item">
								  		<figure>
				        					<img alt="portfolio" src="files/images/08-portfolio.jpg">
				        					<figcaption>
				            					<h3>Normcore Dreamcatcher</h3>
				            					<p>Lorem ipsum dolor sit amet consectetur.</p>
				        					</figcaption>
				    					</figure>								    
				    				</div> -->
								</div>
							</div>
						</div>
						<div class="owl-navigation">
						  <a class="btn prev fa fa-angle-left"></a>
						  <a class="btn next fa fa-angle-right"></a>
						  <a href="work-3columns.php" class="go-to">Go to portfolio</a>
						</div>
					</div>
				</section>

				<section class="testimonials">
					<div class="container">
						<div class="section-heading">
							<h2>What Others saying</h2>
							<div class="section-dec"></div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div id="owl-demo" class="owl-carousel owl-theme">
									<div class="item">
								  		<div class="testimonials-post">
								  			<span class="fa fa-quote-left"></span>
								  			<p>“ At vero eos et accusamus et iusto odio dignissimos ducimus qui molestias excepturi blanditis ”</p>
								  			<h6>Ramshad Imeri - <em>India,Malappura</em></h6>
								  		</div>
								    </div>
								    <div class="item">
								  		<div class="testimonials-post">
								  			<span class="fa fa-quote-left"></span>
								  			<p>“ At vero eos et accusamus et iusto odio dignissimos ducimus qui molestias excepturi blanditis ”</p>
								  			<h6>Akhil Luis - <em>India, Calicut</em></h6>
								  		</div>
								    </div>
								    <div class="item">
								  		<div class="testimonials-post">
								  			<span class="fa fa-quote-left"></span>
								  			<p>“ At vero eos et accusamus et iusto odio dignissimos ducimus qui molestias excepturi blanditis ”</p>
								  			<h6>Ramkumar - <em>Munnar, Kerala</em></h6>
								  		</div>
								    </div>
								    <div class="item">
								  		<div class="testimonials-post">
								  			<span class="fa fa-quote-left"></span>
								  			<p>“ At vero eos et accusamus et iusto odio dignissimos ducimus qui molestias excepturi blanditis ”</p>
								  			<h6>Sajit OB - <em>Berlin, Germany</em></h6>
								  		</div>
								    </div>
								    <div class="item">
								  		<div class="testimonials-post">
								  			<span class="fa fa-quote-left"></span>
								  			<p>“ At vero eos et accusamus et iusto odio dignissimos ducimus qui molestias excepturi blanditis ”</p>
								  			<h6>Anithamol Benny - <em>Thodupuzha, Kottayam</em></h6>
								  		</div>
								    </div>
								    <div class="item">
								  		<div class="testimonials-post">
								  			<span class="fa fa-quote-left"></span>
								  			<p>“ At vero eos et accusamus et iusto odio dignissimos ducimus qui molestias excepturi blanditis ”</p>
								  			<h6>Sreejith Rajan - <em>India, Alappuzha</em></h6>
								  		</div>
								    </div>
								    <div class="item">
								  		<div class="testimonials-post">
								  			<span class="fa fa-quote-left"></span>
								  			<p>“ At vero eos et accusamus et iusto odio dignissimos ducimus qui molestias excepturi blanditis ”</p>
								  			<h6>Aneeshkumar - <em>Kakkanad ,Cochin</em></h6>
								  		</div>
								    </div>
								    <div class="item">
								  		<div class="testimonials-post">
								  			<span class="fa fa-quote-left"></span>
								  			<p>“ At vero eos et accusamus et iusto odio dignissimos ducimus qui molestias excepturi blanditis ”</p>
								  			<h6>Rohit Sarma - <em>Gurgaon, India</em></h6>
								  		</div>
								    </div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="call-to-action-3">
					<div class="container">
						<div class="col-md-12">
							<h4 class="col-md-10 col-sm-8">Read your lastest newsletters, we have an offer for you!</h4>
							<div class="btn-black col-md-2 col-sm-4"><a href="#">Take it now</a></div>
						</div>
					</div>
				</section>

				<section class="blog-posts">
					<div class="container">
						<div class="section-heading">
							<h2>Latest Posts</h2>
							<div class="section-dec"></div>
						</div>
						<div class="blog-item">
							<div class="col-md-4">
								<a href="blog-single.php"><img src="files/images/01-blog.jpg" alt=""></a>
								<h3><a href="blog-single.php">Lorum Ipsum5</a></h3>
								<span><a href="#">Syam Kesav</a> / <a href="#">6 June 2015</a> / <a href="#">Uncategorized</a></span>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit alis quam est leo, imperdiet eget dictum sed, congue non erosa senean sed ligula hendrerit...</p>
								<div class="read-more">
									<a href="blog-single.php">Read more</a>
								</div>
							</div>
						</div>
						<div class="blog-item">
							<div class="col-md-4">
								<a href="blog-single.php"><img src="files/images/02-blog.jpg" alt=""></a>
								<h3><a href="blog-single.php">Lorum Ipsum5</a></h3>
								<span><a href="#">Manohar Raj</a> / <a href="#">6 June 2015</a> / <a href="#">Uncategorized</a></span>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit alis quam est leo, imperdiet eget dictum sed, congue non erosa senean sed ligula hendrerit...</p>
								<div class="read-more">
									<a href="blog-single.php">Read more</a>
								</div>
							</div>
						</div>
						<div class="blog-item">
							<div class="col-md-4">
								<a href="blog-single.php"><img src="files/images/03-blog.jpg" alt=""></a>
								<h3><a href="blog-single.php">Lorum Ipsum5</a></h3>
								<span><a href="#">George Yeti</a> / <a href="#">6 June 2015</a> / <a href="#">Uncategorized</a></span>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit alis quam est leo, imperdiet eget dictum sed, congue non erosa senean sed ligula hendrerit...</p>
								<div class="read-more">
									<a href="blog-single.php">Read more</a>
								</div>
							</div>
						</div>
					</div>
				</section>
   				<?php include_once 'footer.php' ?>
				
				<a href="#" class="go-top"><i class="fa fa-angle-up"></i></a>

			</div>

		</div>

		<nav class="sidebar-menu slide-from-left">
			<div class="nano">
				<div class="content">
					<nav class="responsive-menu">
						<ul>
							<li><a href="index-2.php">Home</a></li>
							<li class="menu-item-has-children"><a href="#">Pages</a>
								<ul class="sub-menu">
									<li><a href="services.php">Services</a></li>
									<li><a href="clients.php">Clients</a></li>
								</ul>
							</li>
							<li class="menu-item-has-children"><a href="#">Blog</a>
								<ul class="sub-menu">
									<li><a href="blog.php">Blog Classic</a></li>
									<li><a href="blog-grid.php">Blog Grid</a></li>
									<li><a href="blog-single.php">Single Post</a></li>
								</ul>
							</li>
							<li><a href="about.php">About</a></li>
							<li class="menu-item-has-children"><a href="#">Works</a>
								<ul class="sub-menu">
									<li><a href="work-3columns.php">Three Columns</a></li>
									<li><a href="work-4columns.php">Four Columns</a></li>
									<li><a href="single-project.php">Single Project</a></li>
								</ul>
							</li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</nav>

	</div>


	

	<script type="text/javascript" src="files/js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="files/js/bootstrap.min.js"></script>
	<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script src="files/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="files/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

	<script type="text/javascript" src="files/js/plugins.js"></script>
	<script type="text/javascript" src="files/js/custom.js"></script>

</body>
</html>