<?php
    //세션 실행문
    session_start();
    $_SESSION['nickName'] = $nickName;

    $con = mysqli_connect("localhost", "meanzoo", "buyby2020!", "meanzoo");
    mysqli_query($con,'SET NAMES utf8');

    $userID = $_POST["userID"]; 
    $userPassword = $_POST["userPassword"];
    // $userID = "123";
    // $userPassword = "123";
    
    // //작성자 불러오는 쿼리문
    // $loadwriter = mysqli_prepare($con, "SELECT userName FROM STD
    //                                 WHERE userID = '$userID' AND '$userPassword'");
    // mysqli_stmt_execute($loadwriter);
    // mysqli_stmt_fetch($loadwriter);
    // $_SESSION['nickName'] = $loadwriter;

    //로그인 쿼리문
    $statement = mysqli_prepare($con, "SELECT * FROM STD WHERE userID = ? AND userPassword = ?");
    mysqli_stmt_bind_param($statement, "ss", $userID, $userPassword);
    mysqli_stmt_execute($statement);

    mysqli_stmt_store_result($statement);
    mysqli_stmt_bind_result($statement, $userID, $userPassword, $userDe, $userName);

    $response = array();
    $response["success"] = false;
    // $response["success"]=true;
 
    while(mysqli_stmt_fetch($statement)) {
        $response["success"] = true;
        $response["userID"] = $userID;
        $response["userPassword"] = $userPassword;
        $response["userDe"] = $userDe;
        $response["userName"] = $userName;       
    }

    // echo print_r($_SESSION['nickName']);
    echo json_encode($response);
?>