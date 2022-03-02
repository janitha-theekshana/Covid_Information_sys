<?php
header('Content-Type: application/json');

$mysqli = new mysqli('localhost','root','','coviddb');

if(!$mysqli){
	die("Connection failed: " . $mysqli ->error);
}
//query to get data from the tabel
$query = sprintf("SELECT vaccine_name,people From vaccine_details ORDER BY vac_id");

$result = $mysqli ->query($query);

//loop through the returned data
$data_vac = array();
foreach($result as $row){
	$data_vac[] = $row;
}
//free memory assosiated with result
$result->close();

//close connection
$mysqli->close();

//now print the data
print json_encode($data_vac);
?>