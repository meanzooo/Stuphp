<?php
    //세션 실행문
    session_start();

    $con = mysqli_connect("localhost", "meanzoo", "buyby2020!", "meanzoo");
    mysqli_query($con,'SET NAMES utf8');

    $userID = $_POST["userID"]; 
    $userPassword = $_POST["userPassword"];

    $_SESSION['userID'] = $_POST['userID'];
    $_SESSION['userPassword'] = $_POST['userPassword'];
    // $_SESSION['userID'] = 123;
    // $_SESSION['userPassword'] = 123;
    
    //로그인 쿼리문
    $statement = mysqli_prepare($con, "SELECT * FROM STD WHERE userID = ? AND userPassword = ?");
    mysqli_stmt_bind_param($statement, "ss", $userID, $userPassword);
    mysqli_stmt_execute($statement);

    mysqli_stmt_store_result($statement);
    mysqli_stmt_bind_result($statement, $userID, $userPassword, $userDe, $userName);

    $response = array();
    $response["success"] = false;
 
    while(mysqli_stmt_fetch($statement)) {
        $response["success"] = true;
        $response["userID"] = $userID;
        $response["userPassword"] = $userPassword;
        $response["userDe"] = $userDe;
        $response["userName"] = $userName;       
    }

    echo json_encode($response);
?>