<?php

function print_stars($rating){
	
	$html = '';
	for($i = 0; $i < $rating; $i++){
		$html .= '<span class="glyphicon glyphicon-star"></span>';
	}
	for($i = 0; $i < (5 - $rating); $i++){
		$html .= '<span class="glyphicon glyphicon-star-empty"></span>';
	}
	echo $html;
	
}

function pre_print_r($array){
	echo '<pre>';
	print_r($array);
	echo '</pre>';
}

function ssc_query($term, $mode = 'gallery'){

	// Build Query
	$search_query = 'SELECT * FROM products 
	WHERE productName
	LIKE "%'.$search_term.'%" 
	OR description LIKE "%'.$search_term.'%"
	OR category LIKE "%'.$search_term.'%"';

	$all_query = 'SELECT * FROM products';

	switch($mode){
		case 'search':
			$the_query = $search_query;
		case 'all':
			$the_query = $all_query;
	}

	// Do Search
	$result = $connection->query($the_query);
	while($results = $result->fetch_array()) {
	    $result_array[] = $results;
	}
	
	return $results_array;

}