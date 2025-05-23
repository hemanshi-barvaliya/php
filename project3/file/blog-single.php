<?php
include_once '../admin/db.php';

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

				<header class="site-header">
					<div id="main-header" class="main-header header-sticky">
						<div class="inner-header clearfix">
							<div class="logo">
								<a href="index-2.php">YOM</a>
							</div>
							<div class="header-right-toggle pull-right hidden-md hidden-lg">
								<a href="javascript:void(0)" class="side-menu-button"><i class="fa fa-bars"></i></a>
							</div>
							<nav class="main-navigation pull-right hidden-xs hidden-sm">
								<ul>
									<li><a href="index-2.php">Home</a></li>
									<li><a href="#" class="has-submenu">Pages</a>
										<ul class="sub-menu">
											<li><a href="services.php">Services</a></li>
											<li><a href="clients.php">Clients</a></li>
										</ul>
									</li>
									<li><a href="#" class="has-submenu">Blog</a>
										<ul class="sub-menu">
											<li><a href="blog.php">Blog Classic</a></li>
											<li><a href="blog-grid.php">Blog Grid</a></li>
											<li><a href="blog-single.php">Single Post</a></li>
										</ul>
									</li>
									<li><a href="about.php">About</a></li>
									<li><a href="#" class="has-submenu">Work</a>
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
				</header>

				<section class="page-heading wow fadeIn" data-wow-duration="1.5s" style="background-image: url(files/images/01-heading.jpg)">
					<div class="container">
						<div class="page-name">
							<h1>Single Post</h1>
							<span>Lovely layout of heading</span>
						</div>
					</div>
				</section>
				
				<section class="blog-single">
					<div class="container">
						<div class="row">
							<div class="col-md-8">
								<div class="blog-single-item">
									<img src="files/images/01-big-blog.jpg" alt="">
									<?php while($row = mysqli_fetch_assoc($category_data)) { ?>
									<div class="blog-single-content">	
										<h3><a href="#">Lorum Ipsum5</a></h3>
										<span><a href="#">Manohar Raj</a> / <a href="#">6 June 2015</a> / <a href="#">Uncategorized</a></span>
										<p><?php echo $row['name']; ?></p>
										<div class="share-post">
											<span>Share on: <a href="#">facebook</a>, <a href="#">twitter</a>, <a href="#">linkedin</a>, <a href="#">instagram</a></span>
										</div>
									</div>
								<?php }?>
									<div class="prev-btn col-md-6 col-sm-6 col-xs-6">
										<a href="#"><i class="fa fa-angle-left"></i>Previous</a>
									</div>
									<div class="next-btn col-md-6 col-sm-6 col-xs-6">
										<a href="#">Next<i class="fa fa-angle-right"></i></a>
									</div>	
								</div>
								<div class="blog-comments">
									<h2>7 Comments</h2>
									<ul class="coments-content">
										<li class="first-comment-item">
											<img src="files/images/01-author-comment.jpg" alt="">
											<span class="author-title"><a href="#">Akhil Raj</a></span>
											<span class="comment-date">10 May 2015 / <a href="#">Reply</a>
											</span>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, libero sit amet maximus ultricies, tortor justo venenatis justo, ac auctor quam lorem ac lectus.</p>
										</li>
										<li class="second-comment-item">
											<img src="files/images/02-author-comment.jpg" alt="">
											<span class="author-title"><a href="#">Meera</a></span>
											<span class="comment-date">12 May 2015 / <a href="#">Reply</a>
											</span>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, libero sit amet maximus ultricies, tortor justo venenatis justo.</p>
										</li>
										<li class="third-comment-item">
											<img src="files/images/03-author-comment.jpg" alt="">
											<span class="author-title"><a href="#">Joseph</a></span>
											<span class="comment-date">14 June 2015 / <a href="#">Reply</a>
											</span>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, libero sit amet maximus ultricies, tortor justo venenatis justo, ac auctor quam lorem ac lectus.</p>
										</li>
									</ul>
								</div>
								<div class="submit-comment col-sm-12">
									<h2>Leave A Comment</h2>
									<form id="contact_form" action="#" method="POST" enctype="multipart/form-data">
										<div class=" col-md-4 col-sm-4 col-xs-6">
											<input type="text" class="blog-search-field" name="s" placeholder="Your name..." value="">
										</div>
										<div class="col-md-4 col-sm-4 col-xs-6">
											<input type="text" class="blog-search-field" name="s" placeholder="Your email..." value="">
										</div>
										<div class="col-md-4 col-sm-4 col-xs-12">
											<input type="text" class="subject" name="s" placeholder="Subject..." value="">
										</div>
										<div class="col-md-12 col-sm-12">
											<textarea id="message" class="input" name="message" placeholder="Comment..."></textarea>
										</div>
										<div class="submit-coment col-md-12">
											<div class="btn-black">
												<a href="#">Submit now</a>
											</div>
										</div>
									</form>		
								</div>
							</div>
							<div class="col-md-4">
								<div class="widget-item">
									<h2>Search here</h2>
									<div class="dec-line"></div>
									<form method="get" id="blog-search" class="blog-search">
										<input type="text" class="blog-search-field" name="s" placeholder="Type keyword..." value="">
									</form>
								</div>
								<div class="widget-item">
									<h2>About Us</h2>
									<div class="dec-line">	
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique earum quod iste, natus quaerat facere a rem dolor sit amet, et placeat nemo.</p>
									<div class="social-icons">
										<ul>
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
											<li><a href="#"><i class="fa fa-instagram"></i></a></li>
											<li><a href="#"><i class="fa fa-rss"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="widget-item">
									<h2>Recent Posts</h2>
									<div class="dec-line"></div>
									<ul class="recent-item">
										<li class="recent-post-item">
											<a href="#">
												<img src="files/images/01-recentpost.jpg" alt="">
												<span class="post-title">Jhony Sebastian</span>
											</a>
											<span class="post-info">10 June 2015</span>
										</li>
										<li class="recent-post-item">
											<a href="#">
												<img src="files/images/02-recentpost.jpg" alt="">
												<span class="post-title">Ramshad Padinjarayil</span>
											</a>
											<span class="post-info">9 June 2015</span>
										</li>
										<li class="recent-post-item">
											<a href="#">
												<img src="files/images/03-recentpost.jpg" alt="">
												<span class="post-title">Akil Raj</span>
											</a>
											<span class="post-info">7 June 2015</span>
										</li>
									</ul>
								</div>
								<div class="widget-item">
									<h2>From Flickr</h2>
									<div class="dec-line"></div>
									<div class="flickr-feed">
							        	<ul class="flickr-images">
							        	</ul>
							        </div>
								</div>
							</div>
						</div>
					</div>	
				</section>
<footer class="footer">
      <div class="three spacing"></div>
	  <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h1>
            <a href="index.php">
             YOM
            </a>
          </h1>
          <p>©2015 Yom. All rights reserved.</p>
          <div class="spacing"></div>
          <ul class="socials">
            <li>
              <a href="http://facebook.com">
                <i class="fa fa-facebook"></i>
              </a>
            </li>
            <li>
              <a href="http://twitter.com">
                <i class="fa fa-twitter"></i>
              </a>
            </li>
            <li>
              <a href="http://dribbble.com">
                <i class="fa fa-dribbble"></i>
              </a>
            </li>
            <li>
              <a href="http://tumblr.com">
                <i class="fa fa-tumblr"></i>
              </a>
            </li>
          </ul>
          <div class="spacing"></div>
        </div>
        <div class="col-md-3">
          <div class="spacing"></div>
          <div class="links">
            <h4>Some pages</h4>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">View some works here</a></li>
              <li><a href="#">Follow our blog</a></li>
              <li><a href="#">Contact us</a></li>
              <li><a href="#">Our services</a></li>
            </ul>
          </div>
          <div class="spacing"></div>
        </div>
        <div class="col-md-3">
          <div class="spacing"></div>
          <div class="links">
            <h4>Recent posts</h4>
            <ul>
              <li><a href="#">Hello World!</a></li>
              <li><a href="#">This is the post title here</a></li>
              <li><a href="#">Our happy day</a></li>
              <li><a href="#">The first works done</a></li>
              <li><a href="#">The cats and dogs</a></li>
            </ul>
          </div>
          <div class="spacing"></div>
        </div>
        <div class="col-md-3">
          <div class="spacing"></div>
          <h4>Email updats</h4>
          <p>We want to share our latest trends, news and insights with you.</p>
          <form>
            <input class="email-address" placeholder="Your email address" type="text">
            <input class="button boxed small" type="submit">
          </form>
          <div class="spacing"></div>
        </div>
      </div>
	  </div>
      <div class="two spacing"></div>
    </footer>
				

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