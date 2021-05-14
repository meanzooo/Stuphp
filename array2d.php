<?php
	$sum;
	$std = array(array(58,90,89,95,76),
		   array(96,83,67,73,100),
		   array(77,84,95,68,99));

	for ($i=0; $i<3; $i++) {
		$sum = 0;
		for ($j=0; $j<5; $j++) {
			$sum += $std[$i][$j];
		}
		echo "std$i+1의 합계 : $sum, 평균 : ($sum/5) <br>";
	}
?>