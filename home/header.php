<!DOCTYPE html>
<html lang="en">
	
<head>
	<?php
	session_start();
	if(!isset($_SESSION['userid']))
{
	header("Location: index.php");
}
	?>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
        <meta name="keywords" content="">
		<title>E-Comm</title>
		<!-- Favicon -->
        <link href="../assets/images/favicon.png" rel="shortcut icon">
		<!-- CSS -->
		<style>
			.button {
			  position:absolute;
			  border: none;
			  color: white;
			  padding: 8px 32px;
			  left: 65%;
			  text-align:left;
			  text-decoration: none;
			  display: inline-block;
			  font-size: 16px;
			  margin: 4px 2px;
			  transition-duration: 0.4s;
			  cursor: pointer;
			}
			
			.button1 {
			  background-color: white; 
			  color: black; 
			  border: 2px solid #8b8f8b;
			}
			
			.button1:hover {
			  background-color: #f3fff3;
			  color: white;
			}
			</style>
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
			<div class="header header-lg">
				<div class="container">
					<div class="logo">
						<h4 class="uppercase letter-spacing-2">E-Comm</a></h4>
					</div>
					<div class="header-menu-wrapper">
						<!-- Menu -->
						<ul class="header-menu">
							<li class="m-item">
								<a class="m-link" href="shop.php">Home</a>
								
							</li>
						
							<li class="m-item">
								<a class="m-link" href="profileview.php">Profile</a>
								
							</li>
							
							<li class="m-item">
								<a class="m-link" href="perchase.php">Purchases</a>
								
							</li>
							<li class="m-item">
								<a class="m-link" href="cart.php">Cart</a>
								
							</li>
							
                            <li class="m-item">
                                <a class="m-link" href="logout.php">logout</a>
					
						</ul>
						
					</div>
				</div>
			</div>
			