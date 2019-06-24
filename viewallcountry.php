<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Learning Asia - View All</title>

	<!-- Bootstrap Core CSS -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">

	<!-- Custom Fonts -->
<!--
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">
-->

	<!-- Plugin CSS -->
	<link rel="stylesheet" href="bootstrap/css/animate.min.css" type="text/css">

	<!-- Custom CSS -->
	<link rel="stylesheet" href="bootstrap/css/creative.css" type="text/css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->    
<style>
		#portfolio{
			margin: 20px;
		}
	  
		.carousel {
		height: 50%;
		}

		.item,
		.active,
		.carousel-inner {
		height: 100%;
		}

		body{
			background-color: #f5f5f0;
		}


        .fill {
            width: 100%;
            height: 100%;
            background-position: center;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            background-size: cover;
            -o-background-size: cover;
        }
	</style>
</head>

<body id="page-top">

		<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand page-scroll" href="index.html">Learning Asia</a>
			</div>
			 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
				<ul class="nav navbar-nav navbar-left">
					<li>
						<a class="page-scroll" href="#east-asia">East Asia</a>
					</li>
					<li>
						<a class="page-scroll" href="#south-asia">South Asia</a>
					</li>
					<li>
						<a class="page-scroll" href="#north-asia">North Asia</a>
					</li>
					<li>
						<a class="page-scroll" href="#central-asia">Central Asia</a>
					</li>
					<li>
						<a class="page-scroll" href="#southeast-asia">Southeast Asia</a>
					</li>
					<li>
						<a class="page-scroll" href="#western-asia">West Asia</a>
					</li>
				</ul>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				
			</div>   
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>

 <!-- Half Page Image Background Carousel Header -->
	<div id="myCarousel" class="carousel slide">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
		</ol>

		<!-- Wrapper for Slides -->
		<div class="carousel-inner">
			<div class="item active">
				<!-- Set the first background image using inline CSS below. -->
				<div class="fill" style="background-image:url('img/asia.jpg');"></div>
				<div class="carousel-caption">
					<h2>Learn</h2>
				</div>
			</div>
			<div class="item">
				<!-- Set the second background image using inline CSS below. -->
				<div class="fill" style="background-image:url('img/header1.jpg');"></div>
				<div class="carousel-caption">
					<h2>Discover</h2>
				</div>   
			</div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('img/header2.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Explore</h2>
                </div>   
            </div>
             <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('img/header3.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Share</h2>
                </div>   
            </div>
		</div>

		<!-- Controls -->
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">    
			<span class="icon-prev"></span>
		</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">
			<span class="icon-next"></span>
		</a>

	</div>


	<div id="east-asia">
	<?php 
		include "asia-parts/east-asia.php";
	?>
	</div>

	<div id="south-asia">
	<?php 
		include "asia-parts/south-asia.php";
	?>
	</div>

	<div id="north-asia">
	<?php 
		include "asia-parts/north-asia.php";
	?>
	</div>

	<div id="central-asia">
	<?php 
		include "asia-parts/central-asia.php";
	?>
	</div>

	<div id="southeast-asia">
	<?php 
		include "asia-parts/southeast-asia.php";
	?>
	</div>

	<div id="western-asia">
	<?php 
		include "asia-parts/west-asia.php";
	?>
	</div>



	<aside class="bg-dark">
		<div class="container text-center">
			<div class="call-to-action">
				<h2>Share this to your social networking sites.</h2>
				<a href="#" class="btn btn-default btn-xl wow tada">Yep. Click here!</a>
			</div>
		</div>
	</aside>



	<!-- jQuery -->
	<script src="bootstrap/js/jquery.js"></script>

	<!-- Bootstrap Core JavaScript -->
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>

	<!-- Plugin JavaScript -->
	<script src="bootstrap/js/jquery.easing.min.js"></script>
	<script src="bootstrap/js/jquery.fittext.js"></script>
	<script src="bootstrap/js/wow.min.js"></script>

	<!-- Custom Theme JavaScript -->
	<script src="bootstrap/js/creative.js"></script>

</body>

</html>
