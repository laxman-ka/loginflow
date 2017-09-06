<?php

$hint = $_GET['term'];

$con = mysqli_connect("localhost", "laxman", "Infi@1234", "laxman");

$sql = "SELECT * FROM `cities` WHERE city_name LIKE '%$hint%'";

$res = mysqli_query($con, $sql);

while ($row = mysqli_fetch_assoc($res)) {
      $arr[] = $row['city_name']." - ".($row['city_state']);
} 

if (isset($arr)) {
	echo json_encode($arr);
} else {
	echo "No Suggestion";
}

?>