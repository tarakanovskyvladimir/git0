<?php 
function task1($file_name_xml){ 
	$xml = simplexml_load_file($file_name_xml) or die("Error: Cannot create object");
	echo '<table border="1"><tr><td>ФИО:</td><td>Страна:</td><td>Штат:</td><td>Адрес:</td>
	<td>Доп. информация:</td></tr>';
	foreach ($xml->Address as $person) {
		$name = $person->Name; $street = $person->Street;
		$city = $person->City; $state = $person->State; 
		$сountry = $person->Country; $somezip = $person->Zip;
		echo "<tr><td>$name</td><td>$сountry</td><td>$state</td><td>$city, $street</td><td>$somezip</td></tr>";
	}
	echo '</table>'.$xml->DeliveryNotes;
	echo '<table border="1"><tr><td>Название продукта:</td><td>Количество:</td><td>Цена:</td><td>Комментарий:</td><td>Дата покупки:</td></tr>';
	foreach ($xml->Items->Item as $item) {
		$productname = $item->ProductName; $quantity = $item->Quantity;
		$usprice = $item->USPrice; $comment = $item->Comment; $shipdate = $item->ShipDate;
		echo "<tr><td>$productname</td><td>$quantity</td><td>$usprice</td><td>$comment</td><td>$shipdate</td></tr>";
	}
	echo '</table>';
}
function task2($car){
	$car_json = json_encode($car);
	$outputjson = fopen('output.json', w);
	fwrite($outputjson, $car_json); fclose($outputjson);
	$outputjson_open = fopen($outputjson,"r");
	$outputjson_read = fread($outputjson_open, 1000);
	fclose($outputjson_open);
	echo $outputjson_read;
}
function task3(){
	$prog_array = []; $array_csv = './rand.csv';
	for ($i=0; $i < 50; $i++) { $rand_item = rand(0, 100); $prog_array[] = $rand_item; }
	$fh = fopen($array_csv,'w') or die("Can't open $filename");
	if (fputcsv($fh, $prog_array) === false) {die("Can't write CSV line");}
	fclose($fh) or die("Can't close $filename");

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