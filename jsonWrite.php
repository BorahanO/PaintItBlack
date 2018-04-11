<?php
  $debug = true;
  $control = "";
  $filePath = "drawing.json";
  if(!empty($_GET['put'])){
    $control = $_GET['put'];
  }

  if($debug) {echo "php response 1 => " . $control . "<hr>";}
  if($debug) {echo "php response 2 => " . json_encode( $control) . "<hr>";}
  $file = fopen($filePath, "w") or die("Can't open shit >:(");
  fwrite($file, $control);
  fclose($file);
 ?>
