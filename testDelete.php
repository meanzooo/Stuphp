<?php
//    삭제부분

    $con = mysqli_connect("localhost", "meanzoo", "buyby2020!", "meanzoo");
    mysqli_query($con,'SET NAMES utf8');

    $POSTNUM = $_POST['PostNum'];   //현재 게시글 고유번호
    
    //게시글 등록란
//    $sqls = "update ".db_tableInfo::TABLE_BULL_Info." set title='$argEff[0]',contents='$argEff[1]'
//    , reg_date=now() where board_id=".$id;
    $sql = "delete from POST where POSTNUM = '$POSTNUM'";

    $response = array();

//    쿼리문 실패하면 false
    if(!($con->query($sql))){
        $response["success"] = false;
    }

    $response["success"] = true;
 
    echo json_encode($response);

    mysqli_close($con);
?>
