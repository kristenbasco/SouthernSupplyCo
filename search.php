<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>Southern Supply Co. Search - Group 4</title>

		<?php 
			include 'header.php';
			include 'connectdb.php';

			if(isset($_POST['search_term'])){
				$search_term = $_POST['search_term'];

				// Get Search
				$search_term = preg_replace("/[^A-Za-z0-9]/", " ", $_POST['search_term']);
				$search_term = $connection->real_escape_string($search_term);


				// Check Length More Than One Character
				if (strlen($search_term) >= 1 && $search_term !== ' ') {

					// Build Query
					$query = 'SELECT * FROM products 
					WHERE productName
					LIKE "%'.$search_term.'%" 
					OR description LIKE "%'.$search_term.'%"
					OR category LIKE "%'.$search_term.'%"';

					// Do Search
					$result = $connection->query($query);
					while($results = $result->fetch_array()) {
					    $result_array[] = $results;
					}

				} else {
					$err_msg = 'Invalid Search. Please Try Again';
				}
			}

			
		?>
	

		<div class="container">
			<div class="row marT-20 marB-20">
				<div class="col-md-6">
					<h1><span class="glyphicon glyphicon-search"></span> Search Results</h1>
					<h4><?php echo 'We found '.count($result_array).' results for &quot;'.$search_term.'&quot'; ?></h4>
				</div>
			</div>
			
			<?php foreach($result_array as $result){ ?>
				<div class="row option">
					<div class="col-md-3">
						<a href="product.php">
							<img class='img-responsive' src="<?php echo $result['productImage']; ?>" alt="A 50lb bag of concrete">
						</a>
					</div>
					<div class="col-md-6 col-md-offset-1">
						<a class="productLink" href="product.php"><h3><?php echo $result['productName']; ?></h3></a>
						<div class="catStars">

							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
							<span class="glyphicon glyphicon-star"></span>
						</div>
						<p><?php echo $result['description']; ?></p>
					</div>
					<div class="col-md-2 text-right">
						<p class="cartPrice marT-20">Item Total: $<?php echo $result['price']; ?></p>
					</div>
				</div>
			<?php } ?>
			
		</div>
		

		<?php include 'footer.php'; ?>

				<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
				<!-- Include all compiled plugins (below), or include individual files as needed -->
				<script src="js/bootstrap.min.js"></script>
	</body>
</html>