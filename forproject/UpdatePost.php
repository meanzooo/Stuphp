<?php
//수정필요
    $con = mysqli_connect("localhost", "meanzoo", "buyby2020!", "meanzoo");
    mysqli_query($con,'SET NAMES utf8');

    $bno = $_POST['idx']; //$bno에 idx값을 받아와 넣음
    $userpw = password_hash($_POST['userPassword'], PASSWORD_DEFAULT);
    //입력받은 패스워드를 해쉬값으로 암호화
    
    //받아온 idx값을 선택해서 게시글 수정
    $sql("Update POST SET TITLE = "$_POST['bookName']", SUBTITLE = "$_POST['authorName']", PRICE = "$_POST['priceSetting']", CONTENT = "$_POST['detailMemo']" WHERE idx = "$bno"");
    
    $statement = $con -> prepare($sql);
    mysqli_stmt_execute($statement);

    $response = array();
    $response["success"] = true;
 
    echo print_r($statement);
?>
