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

function ssc_query($search_term, $mode = 'search'){

	include 'connectdb.php';

	// Build Query
	$all_query = 'SELECT * FROM products';

	$search_query = 'SELECT * FROM products 
	WHERE productName
	LIKE "%'.$search_term.'%" 
	OR description LIKE "%'.$search_term.'%"
	OR category LIKE "%'.$search_term.'%"';

	switch($mode){
		case 'search':
			$the_query = $search_query;
			break;
		case 'catalog':
			$the_query = $all_query;
			break;
	}

	// Do Search
	$result = $connection->query($search_query);
	while($results = $result->fetch_array()) {
	    $result_array[] = $results;
	}

	return $result_array;

}