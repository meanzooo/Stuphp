<?php

    $con = mysqli_connect("localhost", "meanzoo", "buyby2020!", "meanzoo");
    mysqli_query($con,'SET NAMES utf8');

    $userID = $_POST["userID"]; //사용자가 입력한 userID값을 php 변수에 저장
    $userPassword = $_POST["userPassword"];
    
    $statement = mysqli_prepare($con, "SELECT * FROM STD WHERE userID = ? AND userPassword = ?"); //아이디,비번이 사용자 입력값인 컬럼을 선택
    mysqli_stmt_bind_param($statement, "ss", $userID, $userPassword);
    mysqli_stmt_execute($statement);


    mysqli_stmt_store_result($statement); //stmt이 출력칼럼을 갖고있게 됨
    mysqli_stmt_bind_result($statement, $userID, $userPassword, $userDe, $userName); //결과를 외부 변수에 바인딩(입력)함->php변수에 컬럼 값이 들어감

    $response = array();
    $response["success"] = false;
 
    while(mysqli_stmt_fetch($statement)) {
    //stmt를 바인딩된 변수로 가져옴 -> db에 php 변수 값에 저장된 컬럼 값을 집어넣는 과정?
        $response["success"] = true;
        $response["userID"] = $userID;
        $response["userPassword"] = $userPassword;
        $response["userDe"] = $userDe;
        $response["userName"] = $userName;        
    }


    echo json_encode($response);
?>