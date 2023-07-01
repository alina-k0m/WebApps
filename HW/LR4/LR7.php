<?php echo '7. Спросите <b>имя</b> пользователя с помощью формы. Результат запишите в переменую
              <b>$name</b>. Выведите на экран фразу <b>"Привет, Имя"</b>.', '<br/>', '<br/>';

if (isset($_REQUEST['name'])) {
    $name = $_REQUEST['name'];
    echo 'Привет, ' . $name;
}

?>

<form action="" method="get">
    <input type="text" name="name" placeholder="Введите имя">
    <input type="submit">
</form>

