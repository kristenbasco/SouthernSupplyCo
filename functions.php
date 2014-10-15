<?php

//Prints the stars on screen based on rating from the database
function print_stars($rating){
	
	$html = '';
	for($i = 0; $i < 5; $i++){
		$i < $rating ? $html .= '<span class="glyphicon glyphicon-star"></span>' : $html .= '<span class="glyphicon glyphicon-star-empty"></span>';
	}
	echo $html;
	
}

//Adds pre open and close tags around an array
function pre_print_r($array){
	echo '<pre>';
	print_r($array);
	echo '</pre>';
}

//Queries the database. Used in search and catalog requests.
function ssc_query($search_term, $mode = 'search'){

	include 'connectdb.php';

	// Build Query
	$all_query = 'SELECT * FROM products';

	//Pulls all products that match the search terms
	$search_query = 'SELECT * FROM products 
	WHERE productName
	LIKE "%'.$search_term.'%" 
	OR description LIKE "%'.$search_term.'%"
	OR category LIKE "%'.$search_term.'%"';

	//Acts based on if it is a search or a catalog call
	switch($mode){
		case 'search':
			$the_query = $search_query;
			break;
		case 'catalog':
			$the_query = $all_query;
			break;
	}

	// Do Search
	$result = $connection->query($the_query);
	while($results = $result->fetch_array()) {
	    $result_array[] = $results;
	}

	return $result_array;

}