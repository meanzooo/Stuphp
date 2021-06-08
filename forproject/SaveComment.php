<?php
	$con = mysqli_connect("localhost", "meanzoo", "buyby2020!", "meanzoo");
    mysqli_query($con,'SET NAMES utf8');

    $COMMENT = $_POST["comment"];;

    $sql = "INSERT INTO POST(COMMENT) VALUES('$COMMENT')";

    $statement = $con -> prepare($sql);
    mysqli_stmt_execute($statement);

    $response = array();
    $response["success"] = true;
 
    echo json_encode($response);

    mysqli_close($con);
?>