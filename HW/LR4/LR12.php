<?php echo
<<<END
      <p>12. Спросите у пользователя, какие из языков он знает: <b>html, css, php, javascript</b>.</p>
      <p>Выведите на экран те языки, которые знает пользователь.</n></p>
END;

if (isset($_REQUEST['lang'])) {
    echo implode(', ', $_REQUEST['lang']); //implode - Объединяет элементы массива в строку
} else {
    echo 'False';
}
?>

<form action="" method="get">
    <br />
    <input type="checkbox" name="lang[]" value="html" title="html">html<br />
    <input type="checkbox" name="lang[]" value="css" title="css">css<br />
    <input type="checkbox" name="lang[]" value="php" title="php">php<br />
    <input type="checkbox" name="lang[]" value="js" title="js">js<br />
    <input type="submit" name="go">
</form>