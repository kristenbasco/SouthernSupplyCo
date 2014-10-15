<?php

include 'functions.php';

$result_array = ssc_query($_POST['query'], 'search');

echo json_encode($result_array);

