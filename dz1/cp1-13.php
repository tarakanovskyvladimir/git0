<?php header( 'Content-Type: text/plain; charset=UTF-8' );
	$name = "Владимир";
	$age = 29;
	echo "Меня зовут ".$name;
	echo "Мне ".$age." лет\n";
	echo "\"!|\\/\'\"\\\n";
	/*задача на рисунки*/
	$total_image = 80; echo "\nВсего рисунков: " . $total_image;
	$flom_image = 23; echo "\nКоличество рисунков фломастерами: " . $flom_image;
	$karand_image = 40; echo "\nКоличество рисунков карандашами: " . $karand_image;
	$kras_image = $total_image - ($flom_image + $karand_image);
	echo "\nКоличество рисунков красками: " . $kras_image;

	/*константа*/
	define("K", 4.1868);
	if (defined('K')) {
		echo "\n\nКонстанта: ".K." джоулей\n";
	}
	define("K", 4); echo K;

?>