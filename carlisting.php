<?php
session_start();
include "module.inc";
?>

<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="UTF-8">
		<meta name="author" content="AdSpark Inc.">
		<link rel="icon" href="favicon.ico" type="image/x-icon">

		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,500,700|Roboto:300,400,500,700" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="http://www.jasny.net/bootstrap/dist/css/jasny-bootstrap.min.css" rel="stylesheet"/>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

		<link href="http://getbootstrap.com/dist/css/bootstrap.css" rel="stylesheet" type="text/css" />
		<script src="http://getbootstrap.com/dist/js/bootstrap.js">
		</script>
    <script src="http://www.jasny.net/bootstrap/dist/js/jasny-bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>

		<link rel="stylesheet" href="form.css">
		<link rel="stylesheet" href="css/main.css">
	</head>
	<body>
	<div class="mother-wrapper">
		<div class="full-wrapper">
			<!-- Static navbar -->
			<div class="navbar  navbar-default">
					<div class="container-fluid-nav">
							<div class="row">
											<div class="navbar-header">
													<button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".navbar-offcanvas" data-canvas="body">
															<span class="icon-bar"></span>
															<span class="icon-bar"></span>
															<span class="icon-bar"></span>
													</button>
													<a class="navbar-brand" href="index.php"><img src="images/diamond-rent-a-car-logo.png" class="img-responsive center-block"></a>
											</div>
											<div class="navbar-offcanvas navmenu-fixed-left offcanvas  navbar-left">
													<div class="navbar-header">
															<button type="button" class="navbar-toggle nav-bar-mobile" data-toggle="offcanvas" data-target=".navbar-offcanvas" data-canvas="body">
																	<i class="fa fa-times" aria-hidden="true"></i>
															</button>
													</div>
													<ul class="nav navbar-nav">
															<li>
																	<a href="index.php">
																			Home
																	</a>
															</li>
															<li>
																	<a href="about-us.html">
																			About Us
																	</a>
															</li>
															<li>
																	<a href="promos-updates.html">
																			Promos &amp; Updates
																	</a>
															</li>
															<li>
																	<a href="carlisting.php"  class="selected">
																			Car Listing
																	</a>
															</li>
															<li>
																	<a href="contact-us.html">
																			Contact Us
																	</a>
															</li>
							</ul>
                        </div><!--/.nav-collapse -->
					<div id="social-container">
						<ul class="nav navbar-nav">
							<li class="hidden-md hidden-sm hidden-xs">
								<a href="#" class="book-now-link"> <p class="book-now">CHOOSE YOUR RIDE</p></a></li>
							<li>
							<li class="hidden-md hidden-sm hidden-xs">
							 <a href="https://www.facebook.com/DiamondRentaCar/" target="_blank" class="white-item" style="    padding-left: 0px; padding-top: 21px;"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
						</ul>
					</div><!--/.nav-collapse -->
									<ul class="list-inline right-nav-item hidden-lg">
											<li>
													<a href="#" class="book-now-link"> <p class="book-now">CHOOSE YOUR RIDE</p></a></li>
											<li>

											<li><a href="https://www.facebook.com/DiamondRentaCar/" target="_blank" class="white-item"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
									</ul>
					</div>
				</div>
			</div> <!-- /nav bar ends here--->
		</div>
		<div class="full-wrapper">
	    <div class="spacer hidden-lg hidden-md hidden-sm"></div>
			<div id="form-container">
				<?php
					echo "$car_listing";
				?>
			</div>
		</div>
		<div class="full-wrapper">
	    <div class="footer">
	        <div class="container-fluid">
	            <div class="row">
	                <div class="col-md-6">
	                    <p class="footer-item-one"> SMS Inquiry: 0917-869-84-56 | 0917-597-8744</p>
	                </div>
	                <div class="col-md-6">
	                    <p class="footer-item-two"> 24/7 Road-Side Assistance Hotline Number: (02) 822-0679 | (02) 400-2863 | (02) 821 -1081</p>
	                </div>
	            </div>
	        </div>
	    </div>
		</div>
	</div> <!-- mother wrapper ends here-->

		<script src="form.js"></script>
	</body>
</html>
