<?php
//&&대신 and라고 입력해도 된다.
	$fee;
	$age=21;
	$time=18;
	$bcard=true;
	$gcard=false;

	if ($age<3)
		$fee = "무료";
	else if (($age>=3 && $age<=13) or $time<=17)
		$fee = 4000;
	else if (($age>=14 && $age<=18) || $age>=70 || $bcard || $gcard)
		$fee = 8000;
	else
		$fee = 10000;

	echo "입장료는 {$fee}원입니다."
?>