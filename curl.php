<?php
include 'curl_class.php';
include 'csv.php';

$url = 'https://web.njit.edu/~sbs43/homework13/index.php';

$curl = new curl($url);
$response = $curl->get();

print_r($response);
$new_response = json_decode($response, true);
print_r($new_response);
?>
