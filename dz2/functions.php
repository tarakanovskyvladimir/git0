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
	if (gettype($oper)===string and gettype($nums)===array /*or gettype($nums)===double*/) {
		echo "Все верно";
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
		echo gettype($oper);
	}
	
	
}
function task4(){}
function task5(){}
function task6(){}
function task7(){}
function task8(){}
function task9(){}
function task10(){}
?>