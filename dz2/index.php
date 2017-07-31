<?php 
require 'functions.php';
$str = ['раз', 'два', 'три', 'четыре', 'пять', 'шесть', 'семь'];
echo task1($str, true).'<br/>';
$num_array = [10, 6, 1, 55.8];
echo task2($num_array, '+').'<br/>';
echo task3('/', 5, 2, 6, 25.8);
task4(6, 6);
$pal_text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
task5($pal_text);
task6();
$text_repl_1 = '';
$text_repl_2 = 'Две бутылки лимонада';
task7('Карл у Клары украл Кораллы', $text_repl_2);
task8();
echo task9('test.txt');
task10();
?>