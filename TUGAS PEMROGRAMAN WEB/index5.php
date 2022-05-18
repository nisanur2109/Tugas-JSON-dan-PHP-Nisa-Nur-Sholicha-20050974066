<?php
$jsonobj = '{"sasa":17,"novi":25,"putri":16}';

$obj = json_decode($jsonobj);

echo $obj->sasa;
echo $obj->novi;
echo $obj->putri;
?>