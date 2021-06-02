<?php
	//POST로 보낸 postnum 값을 받아서 변수에 입력
	$POSTNUM = $_POST['POSTNUM'];
	
	require_once('db_conn.php');
	
	//특정 정보를 불러오는 쿼리문
	$sql = "SELECT * FROM POST WHERE POSTNUM = $POSTNUM";
	
	//쿼리문을 실행 후 결과를 r 변수에 저장
	$r = mysqli_query($con,$sql);
	
	// r 변수의 내용을 array 형식으로 내보내 result 변수에 저장
	$result = array();

	$row = mysqli_fetch_array($r);
	array_push($result,array(
			"TITLE"=>$row['TITLE'],
			"SUBTITLE"=>$row['SUBTITLE'],
			"PRICE"=>$row['PRICE'],
			"CONTENT"=>$row['CONTENT']
		));

	//저장된 result 변수를 json 형식으로 출력
	echo json_encode(array('result'=>$result), JSON_PRETTY_PRINT+JSON_UNESCAPED_UNICODE);
	
	mysqli_close($con);
?>