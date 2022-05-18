<?php
$jsonobj = '{"sasa":17,"novi":25,"putri":16}';

$arr = json_decode($jsonobj, true);

echo $arr["sasa"];
echo $arr["novi"];
echo $arr["putri"];
?>