<?php
    //안드로이드 Post부분.php

    // 1. 넘어온 userid와 현재 userid가 같은지 비교  -> ok (true)  / no (false)

    $con = mysqli_connect("localhost", "meanzoo", "buyby2020!", "meanzoo");
    mysqli_query($con,'SET NAMES utf8');

//   if (isset($_POST['userID'])){
//       $userID = $_POST['userID'];  //현재 사용자 아이디
//       $POSTNUM = $_POST['PostNum'];   //현재 게시글의 고유번호
//   }else{
//       $userID = null;
//       $POSTNUM = null;
//   }

    $userID = $_POST['userID'];
    $POSTNUM = $_POST['PostNum'];


//게시글 등록란
    $statement = mysqli_prepare($con, "SELECT userID FROM POST WHERE POSTNUM = ?");
    mysqli_stmt_bind_param($statement, "i" ,$POSTNUM);
    mysqli_stmt_execute($statement);

    mysqli_stmt_store_result($statement);
    mysqli_stmt_bind_result($statement, $postUser);

    $rownum = mysqli_stmt_num_rows($statement);

    $response = array();
    $response["success"] = false;

//    row가 반환될 때 돌아감
    while(mysqli_stmt_fetch($statement)){
        if($userID != null){
            if($postUser == $userID){
                $response["success"] = true;
            }
        }
    }

    echo json_encode($response);

    mysqli_close($con);

    ?>

