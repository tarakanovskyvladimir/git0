<?php 
require 'functions.php';
$str = ['раз', 'два', 'три', 'четыре', 'пять', 'шесть', 'семь'];
echo task1($str, true).'<br/>';
$num_array = [10, 6, 1, 55.8];
echo task2($num_array, '+').'<br/>';
echo task3('/', 5, 2, 6, 25.8);
task4(6, 6);
$pal_text = 'ASDFG GF DSA';
echo task5($pal_text);
task6();
task7('Карл у Клары украл Кораллы', 'Две бутылки лимонада');
echo task8("RX packets:950381 errors:0 dropped: 0 overruns:0 frame:0");
echo task9('test.txt');
task10();
?>