
<?php
require("header.php");
require("perchages.php");

?>
			<!-- Hero section -->
			<div class="owl-carousel owl-dots-overlay" data-owl-items="1" data-owl-autoplay="true">
				<!-- Carousel Item 1 -->
				
				<div class="section-2xl bg-image" data-bg-src="../assets/images/shop-slide-1.jpg">
					<div class="bg-dark-02">
						<div class="container text-center">
							<div class="row">
								<div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
									<h6 class="uppercase font-weight-medium margin-bottom-20">New Collection</h6>
									<h1 class="display-4 font-weight-semi-bold">Mysteries Black</h1>
									<!-- <a class="button button-lg button-outline-white-2 button-border-2 margin-top-20" href="#">Shop Now</a> -->
								</div>
							</div><!-- end row -->
						</div><!-- end container -->
					</div>
				</div>
				<!-- Carousel Item 2 -->
				<div class="section-2xl bg-image" data-bg-src="../assets/images/shop-slide-2.jpg">
					<div class="bg-dark-02">
						<div class="container text-center">
							<div class="row">
								<div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
									<h6 class="uppercase font-weight-medium margin-bottom-20">Save up to 70%</h6>
									<h1 class="display-4 font-weight-semi-bold">Clearance Sale!</h1>
									<!-- <a class="button button-lg button-outline-white-2 button-border-2 margin-top-20" href="#">Shop Now</a> -->
								</div>
							</div><!-- end row -->
						</div><!-- end container -->
					</div>
				</div>
			</div>
			<!-- end Hero section -->

			<!-- New Arrivals -->
			<div class="section-lg">
				<div class="container">
					<div class="text-center margin-bottom-70">
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
								<h2 class="font-weight-normal">New Arrivals</h2>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
							</div>
						</div><!-- end row -->
					</div>
					<div class="row col-spacing-40">
						<div class="col-12 col-md-4">
							<div class="product-box">
								<div class="product-img">
									<a href="#">
										<img src="../assets/images/shop-hat-1.jpg" alt="">
										<img src="../assets/images/shop-hat-2.jpg" alt="">
									</a>
									<div class="product-badge-left">
										<span class="font-small uppercase font-family-secondary font-weight-medium">New</span>
									</div>
								</div>
								<div class="product-title">
									<h6 class="font-weight-medium"><a href="#">Snapback in Black</a></h6>
									<div class="price-and-cart">
										<div class="price">
											<span>$20</span>
										</div>
										<!-- <div class="add-to-cart">
											<a class="button-text-1" href="#">Add to Cart</a>
										</div> -->
									</div>
									<!-- <div class="add-to-wishlist">
										<a href="#"><i class="far fa-heart"></i></a>
									</div> -->
								</div>
							</div>
						</div>
						<div class="col-12 col-md-4">
							<div class="product-box">
								<div class="product-img">
									<a href="#">
										<img src="../assets/images/shop-sweater-blue.jpg" alt="">
										<img src="../assets/images/shop-sweater-black.jpg" alt="">
									</a>
									<div class="product-badge-left">
										<span class="font-small uppercase font-family-secondary font-weight-medium">New</span>
									</div>
								</div>
								<div class="product-title">
									<h6 class="font-weight-medium"><a href="#">Sweaters in Dark Blue</a></h6>
									<div class="price-and-cart">
										<div class="price">
											<span>$98</span>
										</div>
										<!-- <div class="add-to-cart">
											<a class="button-text-1" href="#">Add to Cart</a>
										</div> -->
									</div>
									<!-- <div class="add-to-wishlist">
										<a href="#"><i class="far fa-heart"></i></a>
									</div> -->
								</div>
							</div>
						</div>
						<div class="col-12 col-md-4">
							<div class="product-box">
								<div class="product-img">
									<a href="#">
										<img src="../assets/images/shop-sneakers.jpg" alt="">
									</a>
									<div class="product-badge-left">
										<span class="font-small uppercase font-family-secondary font-weight-medium">New</span>
									</div>
								</div>
								<div class="product-title">
									<h6 class="font-weight-medium"><a href="#">Sneakers in White</a></h6>
									<div class="price-and-cart">
										<div class="price">
											<span>$149</span>
										</div>
										<!-- <div class="add-to-cart">
											<a class="button-text-1" href="#">Add to Cart</a>
										</div> -->
									</div>
									<!-- <div class="add-to-wishlist">
										<a href="#"><i class="far fa-heart"></i></a>
									</div> -->
								</div>
							</div>
						</div>
					</div><!-- end row -->
					
				</div><!-- end container -->
			</div>
			<!-- end New Arrivals -->

			
			<!-- Trending Items -->
			<div class="section-lg">
				<div class="container">
					<div class="text-center margin-bottom-70">
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
								<h2 class="font-weight-normal">Our Best Sellers</h2>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
							</div>
						</div><!-- end row -->
					</div>
					<div class="owl-carousel" data-owl-nav="true" data-owl-dots="false" data-owl-margin="40" data-owl-xs="1" data-owl-sm="2" data-owl-md="3" data-owl-lg="3" data-owl-xl="3">
						
						
						
						<!-- Carousel Item 2 -->
						<?php
						$result=$perchage->ViewProducts();    
                        while ($row = $result->fetch_assoc()) {
							
						echo'<div class="product-box">
							<div class="product-img">
								<a href=studio.php?pid="';echo $row["pid"];echo'">
									<img src="../assets/images/shop-sneakers.jpg" alt="">
								</a>
								<div class="product-badge-left">
									<span class="font-small uppercase font-family-secondary font-weight-medium">Hot</span>
								</div>
							</div>
							<div class="product-title">
								<h6 class="font-weight-medium">';printf($row["title"]);echo'</a></h6>
								<div class="price-and-cart">
									<div class="price">
										<span>';printf($row["price"]);echo'</span>
									</div>
									
								</div>
								
							</div>
						</div>';}?>
						<!-- Carousel Item 3 -->
						
						<!-- Carousel Item 4 -->
						<!-- Carousel Item 5 -->
						
					</div><!-- end owl-carousel -->
					
				</div><!-- end container -->
			</div>
			<!-- end Trending Items -->

			<!-- Footer -->
			<div class="section-xs bg-dark">
				
			</div> 
			<!-- end Footer -->
			
		</div>

		<!-- ***** JAVASCRIPTS ***** -->
		<script src="../assets/plugins/jquery.min.js"></script>
		<script src="../../polyfill.io/v3/polyfill.minc677.js?features=IntersectionObserver"></script>
		<script src="../assets/plugins/plugins.js"></script>
		<script src="../assets/js/functions.min.js"></script>
	</body>


</html>