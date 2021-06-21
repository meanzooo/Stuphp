<?php
    session_start();
//    여기가 수정인가!?

    $con = mysqli_connect("localhost", "meanzoo", "buyby2020!", "meanzoo");
    mysqli_query($con,'SET NAMES utf8');

//    $userID = $_SESSION['userID'];
//    $userPassword = $_SESSION['userPassword'];

    $POSTNUM = $_POST['PostNum'];   //현재 게시글 고유번호
    $TITLE = $_POST["bookName"];    // 책 제목
    $SUBTITLE = $_POST["authorName"];   //책 저자
    $PRICE = $_POST["priceSetting"];    //가격
    $CONTENT = $_POST["detailMemo"];    //소개글
    
    //게시글 등록란
//    $sqls = "update ".db_tableInfo::TABLE_BULL_Info." set title='$argEff[0]',contents='$argEff[1]'
//    , reg_date=now() where board_id=".$id;
    $sql = "update POST set TITLE='$TITLE', SUBTITLE='$SUBTITLE', PRICE='$PRICE' , CONTENT= '$CONTENT' where POSTNUM = '$POSTNUM'";

    $response = array();

    if(!($con->query($sql))){
        $response["success"] = false;
    }

    $response["success"] = true;
 
    echo json_encode($response);

    mysqli_close($con);
?>
