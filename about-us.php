<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>About-Us | RLStores</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-3">
          </div>
          <div class="col-sm-3">
            <div class="contactinfo">
              <ul class="nav nav-pills">
                <li><a href="#"><i class="fa fa-phone"></i> +2950188821</a></li>
                <li><a href="#"><i class="fa fa-envelope"></i> rlstores@gmail.com</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div><!--/header_top-->

		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.php"><img src="images/home/logo.png" alt="" /></a>
						</div>
						<div class="btn-group pull-right">
							<div class="btn-group">
							</div>

							<div class="btn-group">
							</div>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="account.php"><i class="fa fa-user"></i> Account</a></li>
                <?php
                if(isset($_SESSION['name'])){
                ?>
                <li><a href="index.php"><i class="fa fa-user"></i>
                <?php
                echo "Welcome,";
                echo $_SESSION['name'];?></a></li>
                <li><a href="logoff.php"><i class="fa fa-unlock"></i>LogOut</a></li>
                <?php
                }
                else {
                  ?>
                <li><a href="login.php"><i class="fa fa-lock"></i>
                <?php
                echo "Login";
                } ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->

		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
            <div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.php" >Home</a></li>
                <li><a href="shop.php">Products</a></li>
                <li><a href="about-us.php" class="active">About Us</a></li>
                <li><a href="contact-us.php">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->

	 <div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">
	    		<div class="col-sm-12">
	    		  <h2 class="title text-center">ABOUT US</h2>
	    		  <div id="gmap" class="contact-map">
                  <p>Rajalakshmi Stores located in Chennai is one of the foremost and leading merchants of Siddha medicines, devotional products such as incense sticks, camphor and other related items. These are products of medicinal and religious use. The religious products are mainly used by the people of South India to worship the deity. We are famous for our Siddha medicine, and also one of the leading retailers of the same. The recent increase in popularity of the medicine among common people has led to exponential growth in demand. </p>
<p>Siddha Medicine is a system of traditional medicine originating in Tamil Nadu in South India to treat psychological and physiological functions of the body. These medicines are sought after by people of diverse demographics, irrespective of their age, gender and nationality, giving us a wide customer base. The products offered by us are used by people for religious as well as medicinal purposes. The medicinal products are bought by people across all demographics while the religious products are mainly bought by people of Hindu origin. India being a land of 80% Hindus, gives us a potential of 800 million customers. We offer good quality stock at subsidized rate. Some of the medicines are taken regularly by the customers and hence they would be ordering some of the medicines on a regular basis. </p>
<p>We have the industry for so many years has the advantage of trust among their customers and experience in the field. We want to cover the customers from wide range of places, which in turn would help us to reach the different set of people all over the country.</p>
<p>Rajalakshmi Stores is the household name among the people of Chennai. We have inspired trust and confidence among customers by our valuable service, quality of products and friendly customer care. We also have articles published about our stores in the local newspaper. We have happy feedback through words of mouth of satisfied customers. We are also planning to host some promotional offers for our customers and also run an ad campaign in major cities.
</p>
					</div>
				</div>
			</div>
            <div class="row">
	    		<div class="col-sm-12">

					</div>
				</div>
			</div>

	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2>RLStores</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="images/home/map.png" alt="" />
							<p>1750 Perambur, Chennai, Tamil Nadu, India</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Online Help</a></li>
								<li><a href="">Contact Us</a></li>
								<li><a href="">FAQ�s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Terms of Use</a></li>
								<li><a href="">Privacy Policy</a></li>
								<li><a href="">Refund Policy</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Company Information</a></li>
								<li><a href="">Careers</a></li>
								<li><a href="">Store Location</a></li>
								<li><a href="">Affillate Program</a></li>
								<li><a href="">Copyright</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About RLStores</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2016 RLStores Inc. All rights reserved.</p>
					<p class="pull-right">Designed by MPM</a></span></p>
				</div>
			</div>
		</div>

	</footer><!--/Footer-->



    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="js/gmaps.js"></script>
	<script src="js/contact.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
