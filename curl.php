<?php
include 'curl_class.php';
include 'csv.php';

$url = 'https://web.njit.edu/~jic6/all_together/index.php';

$curl = new curl($url);
$response = $curl->get();

print_r($response);
$new_response = json_decode($response, true);
print_r($new_response);
?>
