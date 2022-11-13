<!-- <!DOCTYPE html>
<html lang="en"> -->

<?php

require("header.php");
require("perchages.php");
// $conn=mysqli_connect("localhost","root","","test");
$cart=$_SESSION['cart'];
$cost=0;
// print_r($cart);
?>
		<div class="section-lg">
			<div class="container">
				<div class="row col-spacing-50">
					<div class="col-12 col-xl-8">
						<table class="table cart-table">
							<thead>
								<tr>
									<th scope="col"></th>
									<th scope="col"></th>
									<th scope="col">Product</th>
									<th scope="col">Price</th>
								</tr>
							</thead>
							
							<?php 
							foreach($cart as $key => $value)
							{
								// $sql="SELECT * FROM `products` WHERE pid='$value'";
								// $result = $conn->query($sql);
								// $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
								$row=$perchage->View($value);
								// print_r($row);
							echo'<tbody>
								<tr>
									<th scope="row"><a href=remove.php?pid=';echo $row["pid"]; echo'>x</a></th>
									<td class="product-thumbnail">
										<a href=studio.php?pid=';echo $row["pid"];echo'><img src="../assets/images/shop-hat-1.jpg" alt=""></a>
									</td>
									<td>';printf($row["title"]);echo'</td>
									<td>';printf($row["price"]);$cost=$cost+$row['price'];echo'</td>
								</tr>
								
							</tbody>';}?>
						</table>
					</div>
					<div class="col-12 col-xl-4">
						<div class="bg-light-gray padding-40">
							<h5 class="font-weight-normal">Cart totals</h5>
							<table class="table cart-totals">
								<tbody>
								
									<tr>
										<th scope="row">Total</th>
										<td><?php echo $cost;?></td>
									</tr>
								</tbody>
							</table>
							<a class="button button-md button-dark button-fullwidth margin-top-20" href="productperchase.php" style="position: sticky">Buy</a>
						</div>
					</div>
				</div><!-- end row -->
			</div><!-- end container -->
		</div>

		

	<!-- ***** JAVASCRIPTS ***** -->
	<script src="../assets/plugins/jquery.min.js"></script>
	<script src="../assets/plugins/plugins.js"></script>
	<script src="../assets/js/functions.min.js"></script>
</body>


</html>