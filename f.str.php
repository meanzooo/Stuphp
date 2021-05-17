<?php
	$tel = "010-1234-5678";
	$num_tel = strlen($tel); //문자열의 길이를 계산한다.
	echo "/$tel의 문자열 길이 : $num_tel";

	$tel1 = substr($tel,0,3);
	//문자열,인덱스,개수를 지정하여 문자열을 자른다.
	echo "<br> $tel1";

	$phone = explode("-",$tel);
	//문자열 tel에서 -를 기준으로 분리한 뒤 배열로 저장한다.
	echo "전화번호 : $phone[0] $phone[1] $phone[2]";

	/* 문자열 내장 함수론 이 외에도 nl2br() => \n을 <br>태그로 바꿈,
	     sprintf() => 문자열을 특정 양식에 맞춤 등의 기능이 있다.   */

	/* 수학 관련 내장 함수로는 date() => 현재 날짜 구하기, rand() => 난수 생성 */
?>