<?php
	$con = mysqli_connect("localhost", "meanzoo", "buyby2020!", "meanzoo");
	$result = mysqli_query($con, "SELECT * FROM POST;");

	$response = array();

	while($row = mysqli_fetch_array($result)) {
			array_push($response, array("TITLE"=>$row[7]));
		}

	echo json_encode(array("response"=>$response));

	mysqli_close($con);
?>