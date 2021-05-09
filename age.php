<?php
	$age;

	$nowyear=2021;
	$nowmonth=5;
	$nowday=9;

	$birthyear=2001;
	$birthmonth=5;
	$birthday=12;

	if ($birthmonth < $nowmonth) {
		$age = $nowyear - $birthyear;
	} else if ($birthmonth == $nowmonth) {
		if ($birthday < $nowday)
			$age = $nowyear - $birthyear;
		else
			$age = $nowyear - $birthyear - 1;
	} else
		$age = $nowyear - $birthyear - 1;

	echo "만 나이 : {$age}세";
?>