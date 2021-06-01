<?php
	$con = mysqli_connect("localhost", "meanzoo", "buyby2020!", "meanzoo");
    mysqli_query($con,'SET NAMES utf8');

	$sql = mq("select * from POST order by POSTNUM desc limit 0,10"); 
            while($board = $sql -> fetch_array()) {
            //변수에 DB에서 가져온 값을 저장
           		$title = $board["TITLE"];
           		$price = $board["PRICE"];
           		$writer = $board["WRITER"];

           		//title이 30을 넘어서면 ... 표시
            	if(strlen($title)>30) {
                $title
                = str_replace($board["TITLE"], mb_substr($board["TITLE"],0,30,"utf-8")."...", $board["TITLE"]);
              	}
            }
?>