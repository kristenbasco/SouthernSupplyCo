<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>Southern Supply Co. Catalog - Group 4</title>

		<?php 
			include 'header.php';
			include 'includes.php';

			// Define the query
			$query = 'SELECT * FROM products';

			//  Perform the query and store the results into an array
			$result = $connection->query($query);
			while($results = $result->fetch_array()) {
			    $result_array[] = $results;
			}

			// Print the results of the query in a formatted view
			//pre_print_r($result_array);
		?>

		<div class='container categories'>
			<ol class="breadcrumb">
				<li><a href="home.php">Home</a></li>
				<li class="active">Concrete</li>
			</ol>
			<h1 class="marB-20">Concrete Mix</h1>
				<div class="row">
					<?php $i = 0; ?>
					<?php foreach($result_array as $row){ ?>
	
						<div class="col-md-3 col-sm-6 option">
							<a href="product.php">
								<img class='img-responsive' src="<?php echo $row['productImage']; ?>" alt="<?php echo $row['productName']; ?>">
							</a>
							<div>
								<a class="productLink  " href="product.php"><h3 class="productSpacer"><?php echo $row['productName']; ?></h3></a>
								<div class="catStars">
									<?php print_stars($row['rating']); ?>
								</div>
								<div class="row">
									<div class="col-md-4">
										<p class="price">$<?php echo $row['price']; ?></p>
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
						<?php $i++ ?>
						<?php if($i == 4){ ?>
								</div>
							<div class="row">
							<?php $i = 0; ?>

						<?php } ?>

					<?php } ?>
					
				</div>
		</div>

		<?php include 'footer.php'; ?>

	</body>
</html>