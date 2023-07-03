<?php echo '2. Разработать программу, которая считала бы количество вхождений какой-нибудь
              выбранной вами цифры в выбранном вами числе. Например: цифра 5 в числе
              442158755745 встречается 4 раза.', '<br/>', '<br/>';

$number = 442158755745;
$int = 5;
echo "В числе 442158755745 цифра 5 встречатся ".substr_count($number, $int)." раз(а)."."<br />";

/*
echo "В числе ".($_REQUEST['num1'])." цифра ".($_REQUEST['num2'])." встречатся ".substr_count(($_REQUEST['num1']), ($_REQUEST['num2']))." раз(а).<br />";
 */

?>

<form action="" method="get">
    Введите число: <input type='number' name='num1' required>
    Введите цифру: <input type='number' name='num2' required>
    <input type="submit">
</form>