<!DOCTYPE html>
<html lang="en">
<?php
session_start();
// error_reporting(0);
// $conn=mysqli_connect("localhost","root","","test");
require("perchages.php");
$pid=$_GET["pid"];
// gettype($pid);
$row=$perchage->ViewItem($pid);
?>
	
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
        <meta name="keywords" content="">
		<title>Arty - Studio 1</title>
		<!-- Favicon -->
        <link href="../assets/images/favicon.png" rel="shortcut icon">
		<!-- CSS -->
		<link href="../assets/plugins/bootstrap/bootstrap.min.css" rel="stylesheet">
		<link href="../assets/plugins/magnific-popup/magnific-popup.min.css" rel="stylesheet">
		<link href="../assets/plugins/owl-carousel/owl.carousel.min.css" rel="stylesheet">
		<link href="../assets/plugins/owl-carousel/owl.theme.default.min.css" rel="stylesheet">
		<link href="../assets/plugins/justified-gallery/justified-gallery.min.css" rel="stylesheet">
		<link href="../assets/plugins/sal/sal.min.css" rel="stylesheet">
		<link href="../assets/css/main.css" rel="stylesheet">
		<!-- Fonts/Icons -->
		<link href="../assets/plugins/font-awesome/css/all.css" rel="stylesheet">
		<link href="../assets/plugins/themify/themify-icons.min.css" rel="stylesheet">
		<link href="../assets/plugins/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
	</head>
	<body data-preloader="4">

		<div class="wrapper">

			<!-- Purchase Button -->
			<!-- <div class="purchase-btn">
				<a class="button-circle button-circle-sm" href="http://bit.ly/2HuWMRk" target="_blank"><i class="ti-shopping-cart"></i></a>
			</div> -->

			<!-- Scroll to Top -->
			<div class="scrolltotop">
				<a class="button-circle button-circle-sm button-circle-black" href="#"><i class="ti-arrow-up"></i></a>
			</div>
			<!-- end Scroll to Top -->

			<!-- Header -->
			<div class="header header-xl absolute-dark">
				<div class="container-fluid">
					<div class="logo">
						<h4 class="uppercase letter-spacing-2"><a href="shop.php">E-Comm</a></h4>
					</div>
					<!-- Fullscreen Menu Toggle -->
					
				</div>
			</div>
			<!-- Fullscreen Menu -->
			<div class="fm-wrapper">
				<div class="container text-center">
					
				</div><!-- end container -->
			</div>
			<!-- end Header -->
			

			<!-- Hero section -->
			<div class="section-2xl">
				<div class="container">
					<div class="row align-items-center col-spacing-70">
						<div class="col-12 col-lg-7">
							<h1 class="font-weight-normal line-height-140"><?php printf($row['title']); ?></h1>
							<div class="margin-top-30 margin-bottom-50">
								<p class="font-large"><?php printf($row['description']); ?></p>
							</div>
							<div class="margin-top-30 margin-bottom-50">
							<p class="font-large">Price : <?php printf($row['price']);?></p>
							</div>
							<a class="button button-xl button-fancy-1-dark" href="addtocart.php?pid=<?php echo $row['pid']; ?>">Add to Cart</a>
						</div>
						<div class="col-12 col-lg-5">
							<div class="box-shadow-with-hover">
								<img src="../assets/images/studio-1-about.jpg" alt="">
							</div>
						</div>
					</div><!-- end row -->
				</div><!-- end container -->
			</div>
			<!-- end Hero section -->

			<!-- Portfolio section -->

			<!-- Clients section -->
			<!-- end row -->
				</div><!-- end container -->
			</div>
			<!-- end Clients section -->

			<!-- Footer -->
			<div class="section bg-black">
				
			</div>
			<!-- end Footer -->
			
		</div><!-- end wrapper -->

		<!-- ***** JAVASCRIPTS ***** -->
		<script src="../assets/plugins/jquery.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBi4SV0ZRVGoIDH2E00YtJ8Gvg67eaPG5A"></script>
		<script src="../../polyfill.io/v3/polyfill.minc677.js?features=IntersectionObserver"></script>
		<script src="../assets/plugins/plugins.js"></script>
		<script src="../assets/js/functions.min.js"></script>
	</body>


</html>