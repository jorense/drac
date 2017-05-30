<?php
session_start();
include "module.inc";
?>

<!DOCTYPE html>
<html>
	<head>
    <title>Home | Diamond Rent-a-Car</title>
    <link rel="icon" type="image/png" href="favicon.ico" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Diamond Rent-a-Car</title>
    <!-- Latest compiled and minified CSS & JS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,500,700|Roboto:300,400,500,700" rel="stylesheet">
    <link href="http://www.jasny.net/bootstrap/dist/css/jasny-bootstrap.min.css" rel="stylesheet"/>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet"/>
    <link ref="http://www.jasny.net/bootstrap/dist/css/jasny-bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="http://www.jasny.net/bootstrap/dist/js/jasny-bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="form.css">
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
                                    <a href="index.php"  class="selected">
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
                                    <a href="carlisting.php">
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
		</div><!-- /full-wrapper ends here--->
				<div class="full-wrapper">
					<div id="homepage-carousel" class="carousel slide" data-ride="carousel" data-interval="100000">
					  <!-- Indicators -->
					  <ol class="carousel-indicators">
						<li data-target="#homepage-carousel" data-slide-to="0" class="active"></li>
						<li data-target="#homepage-carousel" data-slide-to="1"></li>
						<li data-target="#homepage-carousel" data-slide-to="2"></li>
					  </ol>

					  <!-- Wrapper for slides -->
					  <div class="carousel-inner">
						<div class="item active">
						  <img src="images/homepage-carousel-1.jpg" alt="Los Angeles">
						</div>
						<div class="item">
						  <img src="images/homepage-carousel-2.jpg" alt="New York">
						</div>
						<div class="item">
						  <img src="images/homepage-carousel-3.jpg" alt="New York">
						</div>
					  </div>

					  <!-- Left and right controls -->
					  <a class="left carousel-control" href="#homepage-carousel" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
						<span class="sr-only">Previous</span>
					  </a>
					  <a class="right carousel-control" href="#homepage-carousel" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
						<span class="sr-only">Next</span>
					  </a>
					</div>
				</div>
				<!--body content starts here-->
			<div class="full-wrapper">
				<div id="form-container">
					<?php
						echo "$reservation";
					?>
					<script src="form.js"></script>
				</div>
			</div><!-- /full-wrapper ends here--->
			<div class="full-wrapper">
				<div class="footer-home">
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
			</div><!-- /full-wrapper ends here--->
	</div><!-- /mother-wrapper ends here--->
	</body>
</html>
