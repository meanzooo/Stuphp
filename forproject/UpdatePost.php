<?php 
	if($_SERVER['REQUEST_METHOD']=='POST'){
		//POST로 보낸 값을 받아서 변수에 입력
		$TITLE = $_POST['변수명'];
		$SUBTITLE = $_POST['변수명'];
		$PRICE = $_POST['변수명'];
		$CONTENT = $_POST['변수명'];
		
		//DB 접속 스크립트를 불러옴
		require_once('db_conn.php');
		
		$sql = "UPDATE POST SET TITLE = '$TITLE', SUBTITLE = '$SUBTITLE', PRICE = '$PRICE', CONTENT = $CONTENT WHERE POSTNUM = $POSTNUM;";
		
		//테이블 업데이트
		if(mysqli_query($con,$sql)) { //수정 성공 시
			echo '게시글이 성공적으로 수정되었습니다.';
		} else {
			echo '게시글을 수정할 수 없습니다.';
		}
		
		mysqli_close($con);
	}
?>
