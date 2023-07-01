<?php echo '13. Спросите у пользователя <b>знает ли он PHP</b> с помощью двух radio-кнопок. Выведите
              результат на экран. Сделайте так, чтобы по умолчанию один из вариантов был уже
              отмечен.', '<br/>', '<br/>';

echo "Знаете ли Вы PHP? <br />";

if (isset($_REQUEST['php']) and $_REQUEST['php'] == 'да') {
    echo 'Вы знаете PHP';
}
else if (isset($_REQUEST['php']) and $_REQUEST['php'] == 'нет') {
    echo 'Вы не знаете PHP';
}
?>

<form action="" method="get">
    <input type="radio" name="php" value="да" title="Да" checked>Да<br />
    <input type="radio" name="php" value="нет" title="Нет">Нет<br />
    <input type="submit" name="submit">
</form>