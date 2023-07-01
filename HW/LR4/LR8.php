<?php echo
<<<END
      <p>8. Спросите у пользователя <b>имя, возраст</b>, а также попросите его ввести
      <b>сообщение</b> (его сделайте в <b>textarea</b>). Выведите эти данные на экран
      в <b>формате</b>, приведенном под данной задачей. Позаботьтесь о том, чтобы
      пользователь <b>не мог вводить теги</b> (просто удаляйте их) и таким образом
      сломать сайт.</p>
        <p><i>Привет, Дмитрий, 25 лет.</i></p>
        <p><i>Твое сообщение: ...</i></n></p>
END;

if (isset($_REQUEST['name']) and isset($_REQUEST['age']) and isset($_REQUEST['text'])) {
    $name = strip_tags($_REQUEST['name']);
    $age = strip_tags($_REQUEST['age']);
    $text = strip_tags($_REQUEST['text']);

    if ($_REQUEST['age'] >= 1 && $_REQUEST['age'] <= 150)
    {
    echo 'Привет, ' . $name . ', ' . $age . ' лет.' . '<br>Ваше сообщение: ' . $text;
    }
    else
    {
    echo "Введите корректное число";
    }
}
?>

<form>

Ваше имя: <input type='text' name='name' required>
Ваш возраст: <input type='number' name='age' required>
Введите текст: <textarea name='text' required></textarea>
<input type='submit'>

</form>