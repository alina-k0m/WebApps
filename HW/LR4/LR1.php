<?php echo 'Разработать программу, которая считала бы сумму цифр числа, определенного в
переменной PHP-скрипта. Например: есть число 123, то программа должна вычислить
сумму цифр 1, 2, 3, т.е. 6.'
$a = 123;
$arr = str_split($a);
$sum = array_sum($arr);
echo $sum;
?>

//https://github.com/MarinaSenko/php_basics_tasks/blob/master/HW5.php