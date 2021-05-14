<?php
	//$score[0] = 1 또는 $score = array(1)로 쓴다

	//단
	for ($i=0; $i<=7; $i++) {
		$A[$i] = $i+2;
	}
	//곱해지는 수
	for ($i=0; $i<=8; $i++) {
		$a[$i] = $i+1;
	}
	//출력
	for ($i=0; $i<8; $i++) {
		echo "$i단 : "
		for ($j=0; $j<9; $j++) {
		$price = $A[$i] * $a[$j];
		echo "$price "
		}
		echo "<br>"
	}
?>