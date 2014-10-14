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
	include 'connectdb.php'; 
	echo $term.', '.$mode;
}