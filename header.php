
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>Charity</title>
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
		<!-- google fonts -->
		<link href='http://fonts.googleapis.com/css?family=Lato:400,300italic,300,700%7CPlayfair+Display:400,700italic%7CRoboto:300%7CMontserrat:400,700%7COpen+Sans:400,300%7CLibre+Baskerville:400,400italic' rel='stylesheet' type='text/css'>
		<!-- Bootstrap -->
		<?php wp_head(); ?>
		<link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php bloginfo('template_url'); ?>/css/bootstrap-theme.css" rel="stylesheet">
		<link href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css" rel="stylesheet">
		<link href="<?php bloginfo('template_url'); ?>/css/settings.css" rel="stylesheet">
		<link href="<?php bloginfo('template_url'); ?>/css/global.css" rel="stylesheet">
		<link href="<?php bloginfo('template_url'); ?>/css/style.css" rel="stylesheet">
		<link href="<?php bloginfo('template_url'); ?>/css/responsive.css" rel="stylesheet">
		<link href="<?php bloginfo('template_url'); ?>/css/skin.css" rel="stylesheet">
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>
	<body>

		<div id="wrapper">
			<!--Header Section Start Here -->
			<header id="header">
				<div class="container">
					<div class="row primary-header">
						<a href="index.html" class="col-xs-12 col-sm-2 brand" title="Welcome to Charity"><img src="<?php bloginfo( 'template_directory' ); ?>/images/logo.png" alt="Charity"></a>
						<div class="social-links col-xs-12 col-sm-10">
							<a href="volunteer.html" class="btn btn-default btn-volunteer">Become volunteer</a>
							<ul class="social-icons hidden-xs">
								<li>
									<a href="http://facebook.com" target="_blank"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="http://plus.google.com" target="_blank"><i class="fa fa-google-plus"></i></a>
								</li>
								<li>
									<a href="http://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="http://dribble.com/" target="_blank"><i class="fa fa-linkedin"></i></a>
								</li>
								<li>
									<a href="http://pinterest.com" target="_blank"><i class="fa fa-vimeo-square"></i></a>
								</li>

							</ul>
						</div>
					</div>
				</div>
				<div class="navbar navbar-default" role="navigation">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<nav>
							<ul class="nav navbar-nav">
								<li class="active">
									<a href="javascript:;"  data-toggle="dropdown"  class="submenu-icon">Home <span class="glyphicon glyphicon-chevron-down"></span> <span class="glyphicon glyphicon-chevron-up"></span> </a>
									<div  class="dropdown-menu">
										<ul>
											<li>
												<a href="index.html">Index-1</a>
											</li>
											<li>
												<a href="index2.html">Index-2</a>
											</li>
											<li>
												<a href="index3.html">Index-3</a>
											</li>
											
										</ul>
									</div>
								</li>

								<li>
									<a href="javascript:;"  data-toggle="dropdown"  class="submenu-icon">Causes <span class="glyphicon glyphicon-chevron-down"></span> <span class="glyphicon glyphicon-chevron-up"></span> </a>
									<!-- Drop Down  -->

									<div  class="dropdown-menu">
										<ul>
											<li>
												<a href="causes.html">Causes Home</a>
											</li>
											<li>
												<a href="causes-detail.html">Causes Details full width</a>
											</li>
											<li>
												<a href="causes-detail-with-sidebar.html">Causes Details with sidebar</a>
											</li>

										</ul>
									</div>
								</li>
								<li>
									<a href="javascript:;" data-toggle="dropdown" class="submenu-icon">features <span class="glyphicon glyphicon-chevron-down"></span> <span class="glyphicon glyphicon-chevron-up"></span> </a>
									<!-- Drop Down  -->
									<div  class="dropdown-menu">
										<ul>
											<li>
												<a href="our-story.html">Our Story</a>
											</li>
											<li>
												<a href="our-mission.html">Our Mission</a>
											</li>
											<li>
												<a href="volunteer.html">Become a Volunteer</a>
											</li>
											<li>
												<a href="gallery-two-column.html">Gallery 2 Columns</a>
											</li>
											<li>
												<a href="gallery.html">Gallery 3 Columns</a>
											</li>
											<li>
												<a href="faq.html">Faq </a>
											</li>
											<li>
												<a href="error404.html">404 Error </a>
											</li>
										</ul>
									</div>
									<!-- end  -->

								</li>
								<li>
									<a href="javascript:;" data-toggle="dropdown" class="submenu-icon">Store <span class="glyphicon glyphicon-chevron-down"></span> <span class="glyphicon glyphicon-chevron-up"></span> </a>
										<div  class="dropdown-menu">
										<ul>
											<li>
												<a href="shop-listing.html">Shop Listing</a>
											</li>
											<li>
												<a href="shop-detail.html">Shop Detail</a>
											</li>
											<li>
												<a href="shoping-cart.html">Shoping Cart</a>
											</li>
											
											<li>
												<a href="checkout.html">Checkout</a>
											</li>

										</ul>
									</div>
								</li>
								
								<li>
									<a href="javascript:;" data-toggle="dropdown" class="submenu-icon">Gallery <span class="glyphicon glyphicon-chevron-down"></span> <span class="glyphicon glyphicon-chevron-up"></span> </a>
									<!-- Drop Down  -->
									<div  class="dropdown-menu">
										<ul>
											<li>
												<a href="portfolio.html">Portfolio</a>
											</li>
											<li>
												<a href="portfolio-detail.html">Portfolio Detail</a>
											</li>

										</ul>
									</div>
								</li>
								<li>
									<a href="javascript:;" data-toggle="dropdown" class="submenu-icon">Blog <span class="glyphicon glyphicon-chevron-down"></span> <span class="glyphicon glyphicon-chevron-up"></span> </a>
									<!-- Drop Down  -->
									<div  class="dropdown-menu">
										<ul>
											<li>
												<a href="blog-full-width.html">Blog Full Width</a>
											</li>
											<li>
												<a href="blog-full-width-details.html">Blog Detail Full Width</a>
											</li>

										</ul>
									</div>
								</li>
								<li>
									<a href="contact-us.html">contact us</a>
								</li>

							</ul>
							</nav>
							
							<form class="navbar-form navbar-right search-form" role="search">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Search Here">
								</div>
								<button type="submit">
									<i class="icon-search"></i>
								</button>
							</form>
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</div>

			</header>
			<!-- Header Section End Here -->
			
				<!-- Site Content -->