<?php
//수정필요
    $con = mysqli_connect("localhost", "meanzoo", "buyby2020!", "meanzoo");
    mysqli_query($con,'SET NAMES utf8');

    $bno = $_GET['idx']; //받아온 idx값을 선택해 게시글 삭제
    
    $sql("DELETE FROM POST WHERE idx='$bno'");
    
    $statement = $con -> prepare($sql);
    mysqli_stmt_execute($statement);

    $response = array();
    $response["success"] = true;
 
    echo print_r($statement);
?>
