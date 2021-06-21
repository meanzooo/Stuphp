<?php
	$con = mysqli_connect("localhost", "meanzoo", "buyby2020!", "meanzoo");
	$result = mysqli_query($con, "SELECT * FROM POST order by DATE DESC");

	$response = array();


//    POSTNUM - 게시글 고유번호
//    TITLE - 글 제목
//    SUBTITLE - 책의 저자
//    PRICE - 가격
//    CONTENT - 소개글

		while($row = mysqli_fetch_array($result)) {
			array_push($response, array("POSTNUM"=>$row[0],"TITLE"=>$row[1], "SUBTITLE"=>$row[2],"PRICE"=>$row[3], "CONTENT"=>$row[4], "DATE"=>$row[6]));
			// == response["TITLE"] = $row[1]
		}

	//response라는 변수명으로 JSON 타입인 $response 내용을 출력
	echo json_encode(array("response"=>$response));

	mysqli_close($con);
?>