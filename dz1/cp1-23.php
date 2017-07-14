<?php header( 'Content-Type: text/plain; charset=UTF-8' );
	// возраст
	$age  = 0;
	if ($age > 17 and $age <= 65) {
		echo "Вам еще работать и работать\n";
	} elseif ($age > 65) {
		echo "Вам пора на пенсию\n";
	}
	elseif ($age > 0 and $age <= 17) {
		echo "Вам ещё рано работать\n";
	}
	else{
		echo "Неизвестный возраст\n";
	}


	// день недели
	$day = 4;
	switch ($day) {
		case 1: case 2: case 3: case 4:
		case 5: echo "Это рабочий день\n"; break;
		case 6: case 7: echo "Это выходной день\n"; break;
		default: echo "Неизвестный день\n"; break;
	}

	//марки авто
	$bmw = ["model" => "X5", "speed"=> 120, "doors"=> 5, "year"=>2015 ];
	$toyota = ["model" => "Camry", "speed"=>200, "doors"=>4, "year"=>2013 ];
	$opel = ["model" => "astra", "speed"=>180, "doors"=>5, "year"=>2017 ];
	$all_marka = [$bmw, $toyota, $opel];
	for ($i=0; $i < count($all_marka); $i++) { 
		echo $all_marka[$i];
	}
	print_r($all_marka);
?>