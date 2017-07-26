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
function task2(){}
function task3($oper, ...$nums){$total_nums = func_get_args(); print_r($total_nums);
	if (gettype($oper)===string and ($oper=='+' or $oper=='-' or $oper=='*' or $oper=='/')) {
		echo "Все верно";
		foreach ($nums as $num) {
			if (gettype($num)===integer or gettype($num)===double) {
			 	return true;
			 } else {
			 	# code...
			 }	  
		}
		
		/*switch ($oper) {
		 	case '+': foreach ($nums as $num) {
		 		return $num++;
		 	}; break;
		 	case '-':foreach ($nums as $num) {
		 		$num--;
		 	};; break;
		 	case '*':foreach ($nums as $num) {
		 		$num**;
		 	};; break;
		 	case '/':foreach ($nums as $num) {
		 		$num/$num;
		 	};; break;
		 	
		 	default:
		 		echo "Введите нужные параметры";
		 		break;
		 } */
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
function task5(){}
function task6(){}
function task7(){}
function task8(){}
function task9(){}
function task10(){}
?>