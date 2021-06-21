<?php
//댓글 리스트로 값 넘겨주는 부분

	$con = mysqli_connect("localhost", "meanzoo", "buyby2020!", "meanzoo");
    mysqli_query($con,'SET NAMES utf8');

    $mode = $_POST['mode']; //게시글 입력인지, 값 달라는 것인지
    $POSTNUM = $_POST['POSTNUM'];  //현재 게시글 고유번호
    $Content = $_POST['COMMENT'];  //댓글내용

    if($mode == 'insert'){
        $statement = mysqli_prepare($con, "insert into COM(POSTNUM, COMMENT) values (?,?)");
        mysqli_stmt_bind_param($statement, "is", $POSTNUM, $Content);
        $result = mysqli_stmt_execute($statement);
    }

    $sql = "select * from COM where POSTNUM = '$POSTNUM'";

    $result = mysqli_query($con, "select * from COM where POSTNUM = '$POSTNUM'");

    $response = array();

    while($row = mysqli_fetch_array($result)) {
        array_push($response, array("COMMENT"=>$row[2],"dates"=>$row[3]));
    }

	//response라는 변수명으로 JSON 타입인 $response 내용을 출력
    echo json_encode(array("response"=>$response));

	mysqli_close($con);
?>