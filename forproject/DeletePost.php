<?php
// POST 방식일 경우에만 코드가 실행
if(isset($_POST['POSTNUM'])){
	//POST로 보낸 postnum 값을 받아서 변수에 입력
	$id = $_POST['POSTNUM'];

	//DB 접속 스크립트를 불러옴
	require_once('db_conn.php');

	//특정 종업원의 정보를 삭제하는 쿼리문을 작성
	$sql = "DELETE FROM POST WHERE POSTNUM = $POSTNUM;";

	//쿼리문 실행
	if(mysqli_query($con,$sql)){ // 삭제 성공 시
		echo '게시글이 성공적으로 삭제되었습니다.';
		} else {
		echo '게시글을 삭제할 수 없습니다.';
		}

		mysqli_close($con);
	} else { // POST 방식이 아니면 아래 내용을 출력
		echo 'Post Request 가 아닙니다.';
	}
?>
