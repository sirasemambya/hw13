<?php

function csv_converter($csv_file, $make) {
  if (!($fp = fopen($csv_file, 'r'))) {
    die("Can't open file...");
  }
  
  $key = fgetcsv($fp, "1024",",");
  
  $json = array();
  while($row = fgetcsv($fp, "1024",",")) {
    $json[] = array_combine($key, $row);
  }

  fclose($fp);
  $newjson = array();
  if(isset($make)) {
    $newjson = array_filter($json, function($element) use($make) {
      return isset($element['make']) && $element['make'] == $make;
    });
    return json_encode($newjson, JSON_PRETTY_PRINT);
  } else {
    echo 'Json';
    return json_encode($json, JSON_PRETTY_PRINT);
  }
}

?>
