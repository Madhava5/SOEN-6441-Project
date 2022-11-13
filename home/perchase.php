<!-- <!DOCTYPE html>
<html lang="en"> -->

<?php
require("header.php");
require("perchages.php");
$id=$_SESSION['userid'];
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
									<th scope="col">Product</th>
									<th scope="col">Price</th>
                                    <th scope="col">Date of Perchase</th>
								</tr>
							</thead>
							
							<?php
								$result=$perchage->Perchagesview($id);
                                while ($row = $result->fetch_assoc()) {
								// print_r($row);
							echo'<tbody>
								<tr>
									
									<td class="product-thumbnail">
										<a href=studio.php?pid=';echo $row["pid"];echo'"><img src="../assets/images/shop-hat-1.jpg" alt=""></a>
									</td>
									<td>';printf($row["title"]);echo'</td>
									<td>';printf($row["price"]);echo'</td>
                                    <td>';printf($row["datetime"]);echo'</td>
								</tr>
								
							</tbody>';}?>
						</table>
					</div>
					<!-- <div class="col-12 col-xl-4">
						<div class="bg-light-gray padding-40">
							<h5 class="font-weight-normal">Cart totals</h5>
							<table class="table cart-totals">
								<tbody>
								
									<tr>
										<th scope="row">Total</th>
									
									</tr>
								</tbody>
							</table>
							<a class="button button-md button-dark button-fullwidth margin-top-20" href="perchages.php">Buy</a>
						</div>
					</div> -->
				</div><!-- end row -->
			</div><!-- end container -->
		</div>

		

	<!-- ***** JAVASCRIPTS ***** -->
	<script src="../assets/plugins/jquery.min.js"></script>
	<script src="../assets/plugins/plugins.js"></script>
	<script src="../assets/js/functions.min.js"></script>
</body>


</html>