<?php
$jsonobj = '{"sasa":17,"novi":25,"putri":16}';

$obj = json_decode($jsonobj);

foreach($obj as $key => $value) {
  echo $key . " => " . $value . "<br>";
}
?>