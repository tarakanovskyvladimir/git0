<?php 
function task1($foto, $shtamp){ 
	header('Content-type: image/jpeg'); // Тип содержимого
	$source = imagecreatefromjpeg($foto); // Загрузка изображения
	$degrees = 45; // Угол поворота
	$rotate = imagerotate($source, $degrees, 0); // Поворот
	imagejpeg($rotate); // Вывод
	imagedestroy($source); imagedestroy($rotate); // Высвобождение памяти
	// Установка полей для штампа и получение высоты/ширины штампа
	$marge_right = 140; $marge_bottom = 140; $sx = imagesx($stamp); $sy = imagesy($stamp);

	// Копирование изображения штампа на фотографию с помощью смещения края
	// и ширины фотографии для расчета позиционирования штампа. 
	imagecopy($foto, $stamp, imagesx($foto) - $sx - $marge_right, imagesy($foto) - $sy - $marge_bottom, 0, 0, imagesx($stamp), imagesy($stamp));
	imagepng($foto); imagedestroy($foto);

}

?>