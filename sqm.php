<?php
	echo "----------<br>";
	echo "평 제곱미터<br>";
	echo "----------<br>";

	$sqm = 1;

	for($py=10; $py<=200; $py=$py+10) {
		$sqm = $py * 0.3025;
		echo "$py $sqm<br>";
	}
?>