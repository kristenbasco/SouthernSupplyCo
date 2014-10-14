<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>Southern Supply Co. Catalog - Group 4</title>

		<?php 
			include 'header.php';
			include 'includes.php';

			// Query the Database
			$query = 'SELECT * FROM products';

			// Do Search
			$result = $connection->query($query);
			while($results = $result->fetch_array()) {
			    $result_array[] = $results;
			}
			pre_print_r($result_array);
		?>

		<div class='container categories'>
			<ol class="breadcrumb">
				<li><a href="home.php">Home</a></li>
				<li class="active">Concrete</li>
			</ol>
			<h1 class="marB-20">Concrete Mix</h1>
				<div class="row">
					<div class="col-md-3 col-sm-6 option">
						<a href="product.php">
							<img class='img-responsive' src="img/products/2.jpg" alt="">
						</a>
						<div>
							<a class="productLink  " href="product.php"><h3 class="productSpacer">50lb Concrete</h3></a>
							<div class="catStars">
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
							</div>
							<div class="row">
								<div class="col-md-4">
									<p class="price">$2.48</p>
								</div>
								<div class="col-md-8">
									<p>Qty: <input type="text" value="1" size="3"/></p>
								</div>
							</div>
							<div>
								<a href="cart.php"  class="btn btn-default"><span class="glyphicon glyphicon-plus"></span> Add to Cart</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 option">
						<a href="product.php">
							<img class='img-responsive' src="img/products/3.jpg" alt="">
						</a>
						<div>
							<a class="productLink " href="product.php"><h3 class="productSpacer">80lb Concrete</h3></a>
							<div class="catStars">
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star-empty"></span>
							</div>
							<div class="row">
								<div class="col-md-4">
									<p class="price">$3.95</p>
								</div>
								<div class="col-md-8">
									<p>Qty: <input type="text" value="1" size="3"/></p>
								</div>
							</div>
							<div>
								<a href="cart.php"  class="btn btn-default"><span class="glyphicon glyphicon-plus"></span> Add to Cart</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 option">
						<a href="product.php">
							<img class='img-responsive' src="img/products/4.jpg" alt="">
						</a>
						<div>
							<a class="productLink  " href="product.php"><h3 class="productSpacer">50lb Fast-Setting Concrete</h3></a>
							<div class="catStars">
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star-empty"></span>
								<span class="glyphicon glyphicon-star-empty"></span>
							</div>
							<div class="row">
								<div class="col-md-4">
									<p class="price">$4.98</p>
								</div>
								<div class="col-md-8">
									<p>Qty: <input type="text" value="1" size="3"/></p>
								</div>
							</div>
							<div>
								<a href="cart.php"  class="btn btn-default"><span class="glyphicon glyphicon-plus"></span> Add to Cart</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 option">
						<a href="product.php">
							<img class='img-responsive' src="img/products/5.jpg" alt="">
						</a>
						<div>
							<a class="productLink  " href="product.php"><h3 class="productSpacer">80lb ProFinish Concrete</h3></a>
							<div class="catStars">
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star-empty"></span>
							</div>
							<div class="row">
								<div class="col-md-4">
									<p class="price">$5.18</p>
								</div>
								<div class="col-md-8">
									<p>Qty: <input type="text" value="1" size="3"/></p>
								</div>
							</div>
							<div>
								<a href="cart.php"  class="btn btn-default"><span class="glyphicon glyphicon-plus"></span> Add to Cart</a>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 col-sm-6 option">
						<a href="product.php">
							<img class='img-responsive' src="img/products/6.jpg" alt="">
						</a>
						<div>
							<a class="productLink  " href="product.php"><h3 class="productSpacer">50lb All-Purpose Sand</h3></a>
							<div class="catStars">
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
							</div>
							<div class="row">
								<div class="col-md-4">
									<p class="price">$3.98</p>
								</div>
								<div class="col-md-8">
									<p>Qty: <input type="text" value="1" size="3"/></p>
								</div>
							</div>
							<div>
								<a href="cart.php"  class="btn btn-default"><span class="glyphicon glyphicon-plus"></span> Add to Cart</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 option">
						<a href="product.php">
							<img class='img-responsive' src="img/products/7.jpg" alt="">
						</a>
						<div>
							<a class="productLink " href="product.php"><h3 class="productSpacer">60lb Gray Mortar Repair Mix</h3></a>
							<div class="catStars">
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star-empty"></span>
								<span class="glyphicon glyphicon-star-empty"></span>
							</div>
							<div class="row">
								<div class="col-md-4">
									<p class="price">$5.15</p>
								</div>
								<div class="col-md-8">
									<p>Qty: <input type="text" value="1" size="3"/></p>
								</div>
							</div>
							<div>
								<a href="cart.php"  class="btn btn-default"><span class="glyphicon glyphicon-plus"></span> Add to Cart</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 option">
						<a href="product.php">
							<img class='img-responsive' src="img/products/8.jpg" alt="">
						</a>
						<div>
							<a class="productLink " href="product.php"><h3 class="productSpacer">47lb Portland Cement</h3></a>
							<div class="catStars">
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star-empty"></span>
								<span class="glyphicon glyphicon-star-empty"></span>
							</div>
							<div class="row">
								<div class="col-md-4">
									<p class="price">$5.47</p>
								</div>
								<div class="col-md-8">
									<p>Qty: <input type="text" value="1" size="3"/></p>
								</div>
							</div>
							<div>
								<a href="cart.php"  class="btn btn-default"><span class="glyphicon glyphicon-plus"></span> Add to Cart</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 option">
						<a href="product.php">
							<img class='img-responsive' src="img/products/9.jpg" alt="">
						</a>
						<div>
							<a class="productLink " href="product.php"><h3 class="productSpacer">10lb Concrete Mix</h3></a>
							<div class="catStars">
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star-empty"></span>
							</div>
							<div class="row">
								<div class="col-md-4">
									<p class="price">$2.26</p>
								</div>
								<div class="col-md-8">
									<p>Qty: <input type="text" value="1" size="3"/></p>
								</div>
							</div>
							<div>
								<a href="cart.php"  class="btn btn-default"><span class="glyphicon glyphicon-plus"></span> Add to Cart</a>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 col-sm-6 option">
						<a href="product.php">
							<img class='img-responsive' src="img/products/10.jpg" alt="">
						</a>
						<div>
							<a class="productLink " href="product.php"><h3 class="productSpacer">10lb Gray Mortar Repair Mix</h3></a>
							<div class="catStars">
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star-empty"></span>
								<span class="glyphicon glyphicon-star-empty"></span>
							</div>
							<div class="row">
								<div class="col-md-4">
									<p class="price">$2.17</p>
								</div>
								<div class="col-md-8">
									<p>Qty: <input type="text" value="1" size="3"/></p>
								</div>
							</div>
							<div>
								<a href="cart.php"  class="btn btn-default"><span class="glyphicon glyphicon-plus"></span> Add to Cart</a>
							</div>
						</div>
					</div>
				</div>
		</div>

		<?php include 'footer.php'; ?>

				<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
				<!-- Include all compiled plugins (below), or include individual files as needed -->
				<script src="js/bootstrap.min.js"></script>
	</body>
</html>