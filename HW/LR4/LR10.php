<?php echo
<<<END
      <p>10. Спросите у пользователя логин и пароль (в браузере должен быть звездочками).
                         Сравните их с логином и паролем, хранящихся в файле.
                         Если все верно - выведите "Доступ разрешен!", в противном случае -
                         "Доступ запрещен!". Сделайте так, чтобы скрипт обрезал концевые
                         пробелы в строках, которые ввел пользователь.</p>
      <p>Функция удаления пробелов в начале и конце строки http://www.php.su/trim</n></p>
END;

$loginDefault = 'user';
$passDefault = 12345;
if (isset($_REQUEST['login']) and isset($_REQUEST['password'])) {
    $login = trim($_REQUEST['login']);
    $password = trim($_REQUEST['password']);
    if ($login == $loginDefault and $password == $passDefault) {
        echo 'Доступ разрешен!';
    } else {
        echo 'Доступ запрещен!';
    }
}
?>

<form action="" method="post">
    <input type="text" name="login" placeholder="Введите логин">
    <input type="password" style="-webkit-text-security: disc;" name="password" placeholder="Введите пароль">
    <input type="submit">
</form>