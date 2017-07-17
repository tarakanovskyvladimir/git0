<?php header( 'Content-Type: text/html; charset=UTF-8' );
	$name = "Владимир"; $age = 29;
	echo "Меня зовут $name. Мне $age лет.<br/>";
	echo "\"!|\\/\'\"\\<br/>";
	/*задача на рисунки*/
	$total_image = 80; echo "Всего рисунков: $total_image<br/>";
	$flom_image = 23; echo "Количество рисунков фломастерами: $flom_image<br/>";
	$karand_image = 40; echo "Количество рисунков карандашами: $karand_image<br/>";
	$kras_image = $total_image - ($flom_image + $karand_image);
	echo "Количество рисунков красками: $kras_image<br/><br/>";

	/*константа*/
	define("K", 4.1868);
	if (defined('K')) {
		echo "Константа: ".K." джоулей<br/>";
	}
	define("K", 4); echo K;

?>