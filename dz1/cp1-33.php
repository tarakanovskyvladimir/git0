<?php header( 'Content-Type: text/html; charset=UTF-8' );
	//развернутая строка
	$str = "Тестовая строка по первому домашнему заданию"; echo $str;
	$str_arr = explode(" ", $str); print_r($str_arr); $c_str = count($str_arr);
	while ($c_str >= 0) {echo "$str_arr[$c_str], "; $c_str--;}
	// таблица
	$cols=10; $rows=10;
	echo "<table border='1'><tr>"; 
	for ($i=1; $i <= $rows; $i++) { 
		for ($j=1; $j <= $cols; $j++) {
			if (($i % 2 == 0) and ($j % 2 == 0)) {echo "<td>(".$i*$j.")</td>";}
			elseif (($i % 2 == 1) and ($j % 2 == 1)) {echo "<td>[".$i*$j."]</td>";} 
			else {echo "<td>".$i*$j."</td>";}
		}
		if ($i != $rows) echo "</tr><tr>";
	}
	echo "</tr></table>";
?>