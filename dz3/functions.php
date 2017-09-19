<?php 
function task1($file_name_xml){ 
	$xml = simplexml_load_file($file_name_xml) or die("Error: Cannot create object");
	echo '<table border="1"><tr><td>ФИО</td><td>Страна</td><td>Штат</td><td>Адрес</td>
	<td>Доп. информация</td></tr>';
	foreach ($xml->Address as $person) {
		$name = $person->Name; $street = $person->Street;
		$city = $person->City; $state = $person->State; 
		$сountry = $person->Country; $somezip = $person->Zip;
		echo "<tr><td>$name</td><td>$сountry</td><td>$state</td><td>$city, $street</td><td>$somezip</td></tr>";
	}
	echo '</table>'.$xml->DeliveryNotes;
	echo '<table border="1"><tr><td>Название продукта</td><td>Количество</td><td>Цена</td><td>Комментарий</td><td>Дата покупки</td></tr>';
	foreach ($xml->Items->Item as $item) {
		$productname = $item->ProductName; $quantity = $item->Quantity;
		$usprice = $item->USPrice; $comment = $item->Comment; $shipdate = $item->ShipDate;
		echo "<tr><td>$productname</td><td>$quantity</td><td>$usprice</td><td>$comment</td><td>$shipdate</td></tr>";
	}
	echo '</table>';
}
function task2($car){
	$car_json = json_encode($car);
	$outputjson = fopen('output.json', 'w');
	fwrite($outputjson, $car_json); fclose($outputjson);
	$outputjson_open = file_get_contents('output.json');
	$arr_outputjson = json_decode($outputjson_open, true);
	$arr_outputjson_merge = array_merge($arr_outputjson, array('ghiguli' => array(1978, 1991)));
	$car_json1 = json_encode($arr_outputjson_merge);
	$outputjson1 = fopen('output1.json', 'w');
	fwrite($outputjson1, $car_json1); fclose($outputjson1);
	$outputadd_open = file_get_contents('output1.json');
	$arr_outputadd = json_decode($outputadd_open, true);
	$arr_differ = array_diff($arr_outputjson, $arr_outputadd);

	var_dump($arr_outputjson); var_dump($arr_outputadd); var_dump($arr_differ);
}
function task3(){
	$prog_array = []; $array_csv = './rand.csv';
	for ($i=0; $i < 50; $i++) { $rand_item = rand(0, 100); $prog_array[] = $rand_item; }
	$fh = fopen($array_csv,'w') or die("Нельзя открыть файл $filename");
	if (fputcsv($fh, $prog_array) === false) {die("Невозможно записать CSV line");}
	fclose($fh) or die("Нельзя закрыть файл $filename");

	$rand_array = []; $sumr_array = 0;
	$open_rand = file_get_contents($array_csv); $lines = explode(PHP_EOL, $open_rand);
	foreach ($lines as $line) { $rand_array = str_getcsv($line); }
	foreach ($rand_array as $key => $rand_aritem) {
		if ($rand_aritem%2==0) {$sumr_array+=$rand_aritem;}
	}
	echo "Сумма случайных четных чисел равна $sumr_array"; 

}
function task4($url_curl){
  if( $curl = curl_init() ) {
    curl_setopt($curl,CURLOPT_URL,$url_curl);
    curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
    $out = json_decode(curl_exec($curl), true);
    $curl_title_page = $out["query"]["pages"][15580374]["title"];
    $curl_title_id = $out["query"]["pages"][15580374]["pageid"];
    echo "Title страницы - $curl_title_page, id страницы - $curl_title_id.";
    curl_close($curl);
  }
}
?>