<?php 
    $con = mysqli_connect("localhost", "meanzoo", "buyby2020!", "meanzoo");
    mysqli_query($con,'SET NAMES utf8');

    $TITLE = $_POST["bookName"];
    $SUBTITLE = $_POST["authorName"];
    $PRICE = $_POST["priceSetting"];
    $CONTENT = $_POST["detailMemo"];
    $WRITER = 2;
    //WRITER 수정 필요

    $sql = "INSERT INTO POST(TITLE,SUBTITLE,PRICE,CONTENT,WRITER) ";
    $sql .= "VALUES('$TITLE','$SUBTITLE','$PRICE','$CONTENT','$WRITER')";

    $statement = $con -> prepare($sql);
    mysqli_stmt_execute($statement);

    $response = array();
    $response["success"] = true;
 
   
    echo json_encode($response);
?>
