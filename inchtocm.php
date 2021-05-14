<?php
	$inch = 10;
	echo "<table border = '1'>"; //border로 표의 굵기를 지정한다
	echo "<tr>"; //가로줄
	echo "<th width='100'>인치</th><th width='100'>센티미터</th>"; //제목
	echo "</tr>";
	while ($inch <= 100) {
		$cm = $inch *2.4;
		echo "<tr align='center'><td>$inch</td><td>$cm</td></tr>"; //td는 셀

		$inch = $inch + 10;
	}
	echo "</table>"
?>