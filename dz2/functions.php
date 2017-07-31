<?php 
function task1($ar){ 
	$total_args = func_num_args(); 
	if ($total_args===1) {
		foreach ($ar as $key => $value) { echo '<p>'.$value.'</p>';}
	} elseif($total_args===2) {
		if (func_get_arg(1)) { 
			$st_ar = implode('# ', $ar); return $st_ar;} 
		else { 
			foreach ($ar as $key => $value) { echo '<p>'.$value.'</p>';} }
	} else{
		echo "Передайте нужное количество параметров";}
	
	
}
function task2($nums_ar, $oper_ar){
	if (gettype($oper_ar)===string and ($oper_ar=='+' or $oper_ar=='-' or $oper_ar=='*' or $oper_ar=='/')) {
		if (is_array($nums_ar) and !empty($nums_ar) and (count($nums_ar)>1)) {
			switch ($oper_ar) {
			 	case '+': $sum_p_ar = 0; foreach ($nums_ar as $num) {$sum_p_ar+= $num;}; 
			 		return $sum_p_ar; break;
			 	case '-': $diff_p_ar = 0; foreach ($nums_ar as $num) {$diff_p_ar-= $num;}; 
			 		return $diff_p_ar; break;
			 	case '*': $perf_p_ar = 1; foreach ($nums_ar as $num) {$perf_p_ar*=$num;};
			 		return $perf_p_ar; break;
			 	case '/': $quot_p_ar = 1; foreach ($nums_ar as $num) {
			 		if ($num==0) {echo "Замените значение 0 на какое-нибудь другое";} 
			 		else {$quot_p_ar/=$num;}	
			 	}; 
			 		return $quot_p_ar; break;
			 	default: echo "Введите нужные параметры"; break;
		 	}
		} else {
			echo "Количество чисел дожно быть больше одного";
		} 
	} else {
		echo "Введите арифметическое действе: + - * /";
	}
}
function task3($oper, ...$nums){/*$total_nums = func_get_args(); print_r($total_nums);*/
	if (gettype($oper)===string and ($oper=='+' or $oper=='-' or $oper=='*' or $oper=='/')) {
		if (is_array($nums) and !empty($nums) and (count($nums)>1)) {
			switch ($oper) {
			 	case '+': $sum_p = 0; foreach ($nums as $num) {$sum_p+= $num;}; 
			 		return $sum_p; break;
			 	case '-': $diff_p = 0; foreach ($nums as $num) {$diff_p-= $num;}; 
			 		return $diff_p; break;
			 	case '*': $perf_p = 1; foreach ($nums as $num) {$perf_p*=$num;};
			 		return $perf_p; break;
			 	case '/': $quot_p = 1; foreach ($nums as $num) {
			 		if ($num==0) {echo "Замените значение 0 на какое-нибудь другое";} 
			 		else {$quot_p/=$num;}	
			 	}; 
			 		return $quot_p; break;
			 	default: echo "Введите нужные параметры"; break;
		 	}
		} else {
			echo "Количество чисел дожно быть больше одного";
		} 
	} else {
		echo "Введите арифметическое действе: + - * /";
	}
	
}
function task4($cols, $rows){
	if (gettype($cols)===integer and gettype($rows)===integer) {
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
	} else {
		echo "Множители должны быть целыми числами";
	}
	
}
function task5($text){
	function isPalindrome($w){
    for($i = 0, $l = strlen($w)-1, $il = ceil($l/2); $i < $il; ++$i)
        if($w[$i] != $w[$l-$i])
            return false;
    return true;
	}

	preg_match_all('/\b(\w{5})\b/i', $text, $m);
	for($i = 0, $il = sizeof($m[1]); $i < $il; ++$i)
	if(isPalindrome($m[0][$i]))
    	$log_pal = isPalindrome($m[0][$i]);
    function resPalindrome($log_pal_par){
    	if ($log_pal_par) {echo "Истина";} 
    	else {echo "Ложь";}
    }
    resPalindrome($log_pal);

}
function task6(){
	echo date("d.m.Y H:i:s").'<br/>';
	echo time().'<br/>';
}
function task7($text_repl_1, $text_repl_2){
	$karl = str_replace('К', '', $text_repl_1);
	$dva = str_replace('Две', 'Три', $text_repl_2);
	echo "$karl<br/>$dva<br/>";
}
function task8(){}
function task9($name_file){
	$file = fopen($name_file,"r");
	$text_sys_file = fread($file, 1000);
	fclose($file);
	return $text_sys_file;
}
function task10(){
	$anothertest = fopen('anothertest.txt', w);
	fwrite($anothertest, 'Hello again');
	fclose($anothertest);
}
?>