<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>Southern Supply Co. Admin Panel - Group 4</title>

		<?php 
			include 'header.php';
			include 'includes.php';
		?>
		<div class="container">
			<div class="marT-20 marB-20">
					<h1>Admin Panel</h1>
			</div>
			<div class="option">
				<div class="btn-group marB-20">
					<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-plus"></span> Add</button>
  					<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span> Edit</button>
 					<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> Remove</button>
				</div>
				<table class="table table-responsive table-striped table-bordered">
					<thead>
						<tr>
							<th>Sel</th>
							<th>ID</th>
							<th>Product Name</th>
							<th>Description</th>
							<th>Category</th>
							<th>SKU</th>
							<th>Stock</th>
							<th>Cost</th>
							<th>Price</th>
							<th>Sale Price</th>
							<th>Product Image URL</th>
							<th>Rating</th>
						</tr>
					</thead>
					<tr>
						<td><input type="radio" name="sel" id="sel1"/></td>
						<td>1</td>
						<td>2x4x8 Whitewood Stud</td>
						<td>A standard pine 2"x4"x8' board used in construction.</td>
						<td>softwood</td>
						<td>157</td>
						<td>453</td>
						<td>2.00</td>
						<td>3.15</td>
						<td>3.00</td>
						<td>img/products/1.jpg</td>
						<td>5</td>
					</tr>
					<tr>
						<td><input type="radio" name="sel" id="sel2"/></td>
						<td>2</td>
						<td>50lb Concrete</td>
						<td>A 50lb bag of ready-to-mix concrete.</td>
						<td>concrete</td>
						<td>5763</td>
						<td>275</td>
						<td>2.00</td>
						<td>2.48</td>
						<td>NULL</td>
						<td>img/products/2.jpg</td>
						<td>5</td>
					</tr>
					<tr>
						<td><input type="radio" name="sel" id="sel3"/></td>
						<td>3</td>
						<td>80lb Concrete</td>
						<td>An 80lb bag or ready-to-mix concrete.</td>
						<td>concrete</td>
						<td>5543</td>
						<td>123</td>
						<td>3.00</td>
						<td>3.95</td>
						<td>NULL</td>
						<td>img/products/3.jpg</td>
						<td>4</td>
					</tr>
					<tr>
						<td><input type="radio" name="sel" id="sel4"/></td>
						<td>4</td>
						<td>50lb Fast-Setting Concrete</td>
						<td>A 50lb bag of Fast-Setting Concrete</td>
						<td>concrete</td>
						<td>2646</td>
						<td>120</td>
						<td>4.00</td>
						<td>4.98</td>
						<td>NULL</td>
						<td>img/products/4.jpg</td>
						<td>3</td>
					</tr>
					<tr>
						<td><input type="radio" name="sel" id="sel5"/></td>
						<td>5</td>
						<td>80lb ProFinish Concrete</td>
						<td>An 80lb bag of ProFinish Concrete</td>
						<td>concrete</td>
						<td>24564</td>
						<td>80</td>
						<td>5.00</td>
						<td>5.18</td>
						<td>NULL</td>
						<td>img/products/5.jpg</td>
						<td>4</td>
					</tr>
					<tr>
						<td><input type="radio" name="sel" id="sel6"/></td>
						<td>6</td>
						<td>50lb All-Purpose Sand</td>
						<td>A 50lb bag of All-Purpose Sand</td>
						<td>concrete</td>
						<td>5464</td>
						<td>58</td>
						<td>3.00</td>
						<td>3.98</td>
						<td>NULL</td>
						<td>img/products/6.jpg</td>
						<td>5</td>
					</tr>
					<tr>
						<td><input type="radio" name="sel" id="sel7"/></td>
						<td>7</td>
						<td>60lb Gray Mortar Repair Mix</td>
						<td>A 60lb bag of Gray Mortar Repair Mix</td>
						<td>concrete</td>
						<td>45646</td>
						<td>57</td>
						<td>4.50</td>
						<td>5.15</td>
						<td>NULL</td>
						<td>img/products/7.jpg</td>
						<td>3</td>
					</tr>
					<tr>
						<td><input type="radio" name="sel" id="sel8"/></td>
						<td>8</td>
						<td>47lb Portland Cement</td>
						<td>A 47lb bag of Portland Cement.</td>
						<td>concrete</td>
						<td>1561</td>
						<td>79</td>
						<td>5.00</td>
						<td>5.47</td>
						<td>NULL</td>
						<td>img/products/8.jpg</td>
						<td>3</td>
					</tr>
					<tr>
						<td><input type="radio" name="sel" id="sel9"/></td>
						<td>9</td>
						<td>10lb Concrete Mix</td>
						<td>A 10lb bag of Concrete Mix</td>
						<td>concrete</td>
						<td>4566</td>
						<td>98</td>
						<td>2.00</td>
						<td>2.26</td>
						<td>NULL</td>
						<td>img/products/9.jpg</td>
						<td>4</td>
					</tr>
					<tr>
						<td><input type="radio" name="sel" id="sel10"/></td>
						<td>10</td>
						<td>10lb Gray Mortar Repair Mix</td>
						<td>A 10lb bag of Gray Mortar Repair Mix</td>
						<td>concrete</td>
						<td>15644</td>
						<td>78</td>
						<td>2.00</td>
						<td>2.17</td>
						<td>NULL</td>
						<td>img/products/10.jpg</td>
						<td>3</td>
					</tr>
				</table>
				<div class="btn-group">
					<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-plus"></span> Add</button>
  					<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span> Edit</button>
 					<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> Remove</button>
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