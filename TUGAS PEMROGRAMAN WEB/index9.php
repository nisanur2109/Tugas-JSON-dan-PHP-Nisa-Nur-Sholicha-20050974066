<?php
$myObj = new stdClass();
$myObj->name = "sasa";
$myObj->age = 17;
$myObj->city = "gresik";

$myJSON = json_encode($myObj);

echo $myJSON;
