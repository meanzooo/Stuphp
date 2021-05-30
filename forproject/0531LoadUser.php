<?php
    session_start();

    $con = mysqli_connect("localhost", "meanzoo", "buyby2020!", "meanzoo");
    mysqli_query($con,'SET NAMES utf8');

    $TITLE = $_POST["bookName"];
    $SUBTITLE = $_POST["authorName"];
    $PRICE = $_POST["priceSetting"];
    $CONTENT = $_POST["detailMemo"];

    $userID = $_SESSION['userID'];
    $userPw = $_SESSION['userPassword'];

    //작성자 로드
    $loadwriter = "SELECT userName FROM STD WHERE userID = '$userID' AND userPassword = '$userPw'";
   
    $r = mysqli_query($con,$loadwriter);
   
        // r 변수의 내용을 array 형식으로 내보내 result 변수에 저장
    $result = array();
    $row = mysqli_fetch_array($r); //배열에서 r을 꺼내 row에 저장
    array_push($result, array("userName" => $row['userName'])); //배열에 값을 집어넣음

    echo json_encode($result);
?>