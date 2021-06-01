<?php
    session_start();

    $con = mysqli_connect("localhost", "meanzoo", "buyby2020!", "meanzoo");
    mysqli_query($con,'SET NAMES utf8');

    $userID = $_SESSION['userID'];
    $userPassword = $_SESSION['userPassword'];

    $TITLE = $_POST["bookName"];
    $SUBTITLE = $_POST["authorName"];
    $PRICE = $_POST["priceSetting"];
    $CONTENT = $_POST["detailMemo"];

    //작성자 로드란
    $wsql = "SELECT userName FROM STD WHERE userID= '$userID' AND userPassword= '$userPassword'";
    $result = mysqli_query($con, $wsql);
    $row = mysqli_fetch_assoc($result);
    $WRITER = $row['userName'];
    
    //게시글 등록란
    $sql = "INSERT INTO POST(TITLE,SUBTITLE,PRICE,CONTENT,WRITER) ";
    $sql .= "VALUES('$TITLE','$SUBTITLE','$PRICE','$CONTENT','$WRITER')";

    $statement = $con -> prepare($sql);
    mysqli_stmt_execute($statement);

    $response = array();
    $response["success"] = true;
 
    echo json_encode($response);
?>
