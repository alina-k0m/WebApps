<?php echo '14. Спросите у пользователя его возраст с помощью нескольких radio-кнопок. Варианты
              ответа сделайте такими: <b>менее 20 лет, 20-25, 26-30, более 30.', '<br/>', '<br/>';

echo "Сколько Вам лет? <br />";

if (isset($_REQUEST['age'])) {
    echo "Ваш возраст: ".$_REQUEST['age'];
}
?>

<form action="" method="get">
    <input type="radio" name="age" value="менее 20 лет" title="< 20">менее 20 лет<br />
    <input type="radio" name="age" value="20-25" title="20-25" checked>20-25<br />
    <input type="radio" name="age" value="26-30" title="26-30">26-30<br />
    <input type="radio" name="age" value="более 30" title="> 30">более 30<br />
    <input type="submit" name="submit">
</form>