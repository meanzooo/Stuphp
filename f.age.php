<?php
	function man_age($year, $month, $day, $b_year, $b_month, $b_day) {
		if ($b_month < $month) {
			$age = $year - $b_year;
		} else if ($b_month == $month) {
			if ($b_day <= $day)
				$age = $year - $b_year;
			else
				$age = $year - $b_year - 1 ;
		} else {
			$age = $year - $b_year - 1;
		}
		return $age;
	}

	$my_age = man_age(2021,5,17,2001,5,12);

	echo "내 만 나이는 $my_age";
	?>