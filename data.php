<?php
header('Content-Type: application/json');

$mysqli = new mysqli('localhost','root','','coviddb');

if(!$mysqli){
	die("Connection failed: " . $mysqli ->error);
}
//query to get data from the tabel
$query = sprintf("SELECT QP_ID ,qurantine_start_date From quarantine_people ORDER BY QP_ID");

$result = $mysqli ->query($query);

//loop through the returned data
$data = array();
foreach($result as $row){
	$data[] = $row;
}
//free memory assosiated with result
$result->close();

//close connection
$mysqli->close();

//now print the data
print json_encode($data);
?>