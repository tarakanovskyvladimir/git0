<?php 
require 'functions.php';
echo task1('data.xml').'<br/>';
$auto = array ('LADA' => array(1999, 2001), 'BMW' => array(1991, 2009), 'DAEWOO' => array(1995, 2003, 2012));
echo task2($auto).'<br/>';
echo task3();
task4();
?>