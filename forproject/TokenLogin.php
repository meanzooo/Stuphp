<?php
session_start();
$_SESSION[token]=date("YmdHis"); //은근슬쩍 토큰생성 (아무에게도 안보임, PHPSSID가 보일 뿐)
$_SESSION[tokensave]=$_SESSION[token]; //토큰을 다른 세션에 저장
$rand_token=mt_rand(1,9999);
$_SESSION[fake]=$rand_token;//봇 테러 방지
$faketoken=$_SESSION[tokensave]-$_SESSION[fake];
?>