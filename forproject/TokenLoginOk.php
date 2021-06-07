<?php
    session_start();
    $second="300"; //시간초 지정 60 = 1분
    $time=date("YmdHis") -$_SESSION[tokensave];
    if(!$_SESSION[token] or !$_SESSION[tokensave] or !$_SESSION[fake] or $_POST[l_token]){echo "토큰이 유효하지 않습니다."; exit;}
    if($_SESSION[tokensave]-$_SESSION[fake]==$_POST[l_token]){}else {echo "토큰이 유효하지 않습니다."; exit;}
    if($time<$second) {
        //세션 인증 작업이 성공될때 로그인 커멘드 넣기  

    } else {
        echo "토큰이 유효하지 않습니다.";
        exit;
    }
?>
