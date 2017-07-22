<?php header( 'Content-Type: text/html; charset=UTF-8' );
	
	//развернутая строка
	$str = 'Тестовая строка по первому домашнему заданию'; echo $str.'<br/>';
	$str_arr = explode(" ", $str); '<p>'.print_r($str_arr).'</p><br/>'; 
	$c_str = count($str_arr); $i = 0;
	while ($i < $c_str / 2) {
	    $buf_str_arr = $str_arr[$i];
	    $str_arr[$i] = $str_arr[$c_str - $i - 1];
	    $str_arr[$c_str - $i - 1] = $buf_str_arr; $i++;
	}
	/*while ($c_str >= 0) {
		$rev_str_arr = $str_arr[$c_str-1]; $c_str--;}*/
	echo '<pre>' . var_dump($str_arr) . "</pre>\n";
	$rev_str = implode(', ', $str_arr); echo '<p>'.$rev_str.'</p>';
	
	// таблица
	$cols=10; $rows=10;
	echo '<table border="1"><tr>'; 
	for ($i=1; $i <= $rows; $i++) { 
		for ($j=1; $j <= $cols; $j++) {
			if (($i % 2 == 0) and ($j % 2 == 0)) {echo '<td>('.$i*$j.')</td>';}
			elseif (($i % 2 == 1) and ($j % 2 == 1)) {echo '<td>['.$i*$j.']</td>';} 
			else {echo '<td>'.$i*$j.'</td>';}
		}
		if ($i != $rows) echo '</tr><tr>';
	}
	echo '</tr></table>';
?>