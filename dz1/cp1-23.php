<?php header( 'Content-Type: text/html; charset=UTF-8' );
	// возраст
	$age  = 0;
	if ($age > 17 and $age <= 65) {
		echo "Вам еще работать и работать<br/>";
	} elseif ($age > 65) {
		echo "Вам пора на пенсию<br/>";
	}
	elseif ($age > 0 and $age <= 17) {
		echo "Вам ещё рано работать<br/>";
	}
	else{
		echo "Неизвестный возраст<br/>";
	}


	// день недели
	$day = 4;
	switch ($day) {
		case 1: case 2: case 3: case 4:
		case 5: echo "Это рабочий день<br/>"; break;
		case 6: case 7: echo "Это выходной день<br/>"; break;
		default: echo "Неизвестный день<br/>"; break;
	}

	//марки авто
	$bmw = ['model' => 'X5', 'speed'=> 120, 'doors'=> 5, 'year'=>2015 ];
	$toyota = ['model' => 'Camry', 'speed'=>200, 'doors'=>4, 'year'=>2013 ];
	$opel = ['model' => 'astra', 'speed'=>180, 'doors'=>5, 'year'=>2017 ];
	$all_marka = ['bmw' => $bmw, 'toyota' => $toyota, 'opel' => $opel];
	foreach ($all_marka as $model=>$model_desc){
	    echo "<p>CAR $model<br>";
	    foreach ($model_desc as $name=>$value){echo "$value ";}
    	echo '</p>';
	}
	
?>