<?php
	for ($top=1; $top<=10; $top++) {
		for ($down=10; $down>=$top; $down--) {
			echo "&nbsp;"; //스페이스바
		}
		
		for ($num=1; $num<=$top; $num++) {
			echo "*";
		}
		echo "<br>";
	}
?>