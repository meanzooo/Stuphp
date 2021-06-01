<?php
	$con = mysqli_connect("localhost", "meanzoo", "buyby2020!", "meanzoo");
	$result = mysqli_query($con, "SELECT * FROM POST;");

	$response = array();

	while($row = mysqli_fetch_array($result)) {
	//response["userID"]=$row[0] ....이런식으로 됨.
			array_push($response, array("TITLE"=>$row[1], "PRICE"=>$row[3], "WRITER"=>$row[5]));
		}

	//response라는 변수명으로 JSON 타입으로 $response 내용을 출력
	echo json_encode(array("response"=>$response));

	mysqli_close($con);
?>
