<?php
$jsonobj = '{"sasa":17,"novi":25,"putri":16}';

$arr = json_decode($jsonobj, true);

foreach($arr as $key => $value) {
  echo $key . " => " . $value . "<br>";
}
?>