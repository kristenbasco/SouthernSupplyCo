<?php 
require_once 'connectdb.php';

$result_array = ssc_search($_POST['query'], 'search');

// Check If We Have Results
if (isset($result_array)) { ?>

	<div id="search-results-dropdown">
		<?php foreach ($result_array as $result) { ?>
	        
			<div class="gallery-item">
				<div class="thumbnail clearfix" style="background-image: url(http://ilikewalls.com/wallpaper/6/8/the-starry-night-2.jpg);"></div>
				<h3 class="art-title"><?php echo $result['productName']; ?></h3>
				<p class="art-description"><?php echo $result['description']; ?></p>
			</div>

	   <?php } ?>
   </div>

<?php }else{ ?>
   	<?php // Output ?>
   	<p>Nothing to Display :(</p>
<?php } ?>
