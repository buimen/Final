<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Final</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="http://getbootstrap.com/examples/navbar-fixed-top/navbar-fixed-top.css" rel="stylesheet">
	<link rel="stylesheet" href="./css/style.css">
	<script src="https://use.fontawesome.com/c50c5bf797.js"></script>
	<script src="./js/ie-emulation-modes-warning.js"></script><style type="text/css"></style>
	<link rel="stylesheet" type="text/css" href="css/reponsive.css">
</head>
<body>
	<div class="wrapper">
		<div class="header">
			<nav class="navbar navbar-fixed-top" role="navigation">
				<div class="container">
					<div class="row">
					<div class="navbar-header col-sm-5 col-md-7 col-lg-8">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
							<span class="sr-only">menu mobile</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="">Macankumpang</a>
					</div>
					<div id="navbar" class="navbar-collapse collapse col-sm-5 col-md-5 col-lg-4" aria-expanded="false" style="height: 1px;">
						<ul class="nav navbar-nav">
							<li class="active"><a href="">Home</a></li>
							<li><a href="#">Services</a></li>
							<li><a href="#">Work</a></li>
							<li><a href="#">Testimonials</a></li>
							<li><a href="#">Contact</a></li>					
						</ul>
					</div>
				</div>
			</nav>
			<div class="header-banner">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-10 col-md-7">
							<span>Kalau Kita mau, Pasti ada Jalan</span>
							<p>Semangat terus saudara-saudara!</p>
							<button type="button" class="btn btn-danger">More</button>
						</div>
						<div class="col-xs-12 col-sm-2 col-md-5">
							<img class="img-1" src="">
							<img class="img-2" src="">
							<img class="img-3" src="">
							<img class="img-4" src="">
							<img class="img-5" src="">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="content">
			<div class="content-services">
				<div class="container">
					<h2>Our Services</h2>
					<p>our awesome services</p>
					<div class="line">
						<img src="images/line.png">
					</div>
					<div class="row">
						<div class="item col-xs-6 col-sm-6 col-md-6 col-lg-3">
							<div class="icons">
								<a href=""><i class="fa fa-heart" aria-hidden="true"></i></a>
							</div>
							<a href=""><h5>Beautiful Design</h5></a>
							<a href=""><p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet Aenean</p></a>
							<button type="button" class="btn btn-danger">More</button>
						</div>
						<div class="item col-xs-6 col-sm-6 col-md-6 col-lg-3">
							<div class="icons">
								<a href=""><i class="fa fa-globe" aria-hidden="true"></i></a>
							</div>
							<a href=""><h5>Global Trend</h5></a>
							<a href=""><p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet Aenean</p></a>
							<button type="button" class="btn btn-danger">More</button>
						</div>
						<div class="item item-2 col-xs-6 col-sm-6 col-md-6 col-lg-3">
							<div class="icons">
								<a href=""><i class="fa fa-desktop" aria-hidden="true"></i></a>
							</div>
							<a href=""><h5>Responsive</h5></a>
							<a href=""><p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet Aenean</p></a>
							<button type="button" class="btn btn-danger">More</button>
						</div>
						<div class="item item-2 col-xs-6 col-sm-6 col-md-6 col-lg-3">
							<div class="icons">
								<a href=""><i class="fa fa-rocket" aria-hidden="true"></i></a>
							</div>
							<a href=""><h5>Awesome Design</h5></a>
							<a href=""><p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet Aenean</p></a>
							<button type="button" class="btn btn-danger">More</button>
						</div>
					</div>
				</div>
			</div>
			<div class="content-works">
				<span>Our Greatest Works</span>
				<p>come from awesome imagination</p>
			</div>
			<div class="content-portofolio">
				<div class="container">
					<span>Portofolio</span>
					<p>our awesome works</p>
					<div class="line">
						<img src="images/line-portofolio.png">
					</div>
					<p>All / Web / Print</p>
					<div class="row">
						<?php
							for ($i=0; $i < 6; $i++) { 
						?>
						<div class="item col-xs-6 col-sm-4">
							<a href=""><span>Macankumbang</span></a>
							<a href=""><p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis</p></a>
							<a href=""><i class="fa fa-eye" aria-hidden="true"></i></a>
						</div>
						<?php
							}
						?>
					</div>
					<div class="browse">
						<div class="all">
							<strong>Browse All 300+</strong>
						</div>
						<i class="fa fa-chevron-down" aria-hidden="true"></i>
						<h2>What Our Happy Customer Say</h2>
						<p>lorem ipsum dolor sit amet</p>
						<div class="line">
							<img src="images/line-portofolio.png">
						</div>
						<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
						  	<!-- Indicators -->
						  	<ol class="carousel-indicators">
						    	<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						    	<li data-target="#carousel-example-generic" data-slide-to="1"></li>
						    	<li data-target="#carousel-example-generic" data-slide-to="2"></li>
						    	<li data-target="#carousel-example-generic" data-slide-to="3"></li>
						  	</ol>
						  	<!-- Wrapper for slides -->
						  	<div class="carousel-inner" role="listbox">
						    	<div class="item active">
						    		<div class="row">
							      		<!-- <div class="carousel-caption"> -->
											<div class="col-xs-12 col-sm-3">
												<img src="images/img-circle.png" alt="" class="img-circle">
											</div>
											<div class="col-xs-12 col-sm-8 col-sm-offset-1">
												<p>"This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris."</p>
												<h5>John Doe</h5>
											</div>
										<!-- </div> -->
							      	</div>
						    	</div>
						    	<div class="item">
						    		<div class="row">
							      		<!-- <div class="carousel-caption"> -->
											<div class="col-xs-12 col-sm-3">
												<img src="images/img-circle.png" alt="" class="img-circle">
											</div>
											<div class="col-xs-12 col-sm-8 col-sm-offset-1">
												<p>"This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris."</p>
												<h5>John Doe</h5>
											</div>
										<!-- </div> -->
							      	</div>
						    	</div>
						    	<div class="item">
						    		<div class="row">
							      		<!-- <div class="carousel-caption"> -->
											<div class="col-xs-12 col-sm-3">
												<img src="images/img-circle.png" alt="" class="img-circle">
											</div>
											<div class="col-xs-12 col-sm-8 col-sm-offset-1">
												<p>"This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris."</p>
												<h5>John Doe</h5>
											</div>
										<!-- </div> -->
							      	</div>
						    	</div>
						    	<div class="item">
						    		<div class="row">
							      		<!-- <div class="carousel-caption"> -->
											<div class="col-xs-12 col-sm-3">
												<img src="images/img-circle.png" alt="" class="img-circle">
											</div>
											<div class="col-xs-12 col-sm-8 col-sm-offset-1">
												<p>"This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris."</p>
												<h5>John Doe</h5>
											</div>
										<!-- </div> -->
							      	</div>
						    	</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="content-get">
				<span>Get in Touch With us</span>
				<p>Ready for 24/7</p>
			</div>
			<div class="content-maps">
				<iframe src="https://www.google.com/maps/d/embed?mid=1qKf_PXYajoWwTBn2xZbJG76ucS4"></iframe>
			</div>
			<div class="content-contact">
				<div class="container">
					<h2>Our Services</h2>
					<p>our awesome services</p>
					<div class="line">
						<img src="images/line.png">
					</div>
					<div class="item">
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<strong>Office Hours</strong>
								<p>Monday to Friday / 7:00 - 18:00 Saturday / 9:00 - 15:00</p>
								<div class="row">
									<div class="col-xs-1">
										<i class="fa fa-map-marker" aria-hidden="true"></i>
									</div>
									<div class="col-xs-11">
										<p>25 Silver Cost Avenue, MD 20910 Indonesia</p>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-1">
										<i class="fa fa-phone" aria-hidden="true"></i>
									</div>
									<div class="col-xs-11">
										<p>(621) 555 6789</p>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-1">
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
									</div>
									<div class="col-xs-11">
										<p>hello@macankumbang.net</p>
									</div>
								</div>
								<div class="icons">
									<div class="circle">
										<a href="">
											<i class="fa fa-twitter" aria-hidden="true"></i>
										</a>
									</div>
									<div class="circle">
										<a href="">
											<i class="fa fa-facebook" aria-hidden="true"></i>
										</a>
									</div>
									<div class="color circle">
										<a href="">
											<i class="fa fa-google-plus" aria-hidden="true"></i>
										</a>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="row">
									<div class="col-xs-6 col-sm-6">
										<input type="text" placeholder="Name"></input>
									</div>
									<div class="col-xs-6 col-sm-6">
										<input type="text" placeholder="Email (will not published)"></input>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-12">
										<textarea type="text" placeholder="Message"></textarea>
									</div>
								</div>
								<button type="button" class="btn btn-danger">Send</button>
							</div>
						</div>
					</div>
				</div>
				<button type="button" class="btn btn-default"><i class="fa fa-chevron-up" aria-hidden="true"></i></button>
			</div>
		</div>
		<div class="footer">
			<p>(c) copyright 2013 macankumbang </p>
			<footer>Macankumbang</footer>
		</div>
	
	<!-- Bootstrap core JavaScript -->
	<script src="./js/jquery.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/ie10-viewport-bug-workaround.js"></script>

</body>
</html>