<?php
include 'csv.php';
include 'converter.php';
if(isset($_GET['make'])) {
  $make = $_GET['make'];
}
$json = csv_converter('data.csv', $make);

function generateRandomString($length = 5) {
  return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',ceil($length/strlen($x)) )),1,$length);
}

print_r($json);

?>
