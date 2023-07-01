<?php echo '11. Спросите у пользователя имя с помощью формы. <b>Сделайте чекбокс</b>: если он
              отмечен, то поприветствуйте пользователя, если не отмечен - попрощайтесь с
              пользователем.', '<br/>', '<br/>';

if (isset($_REQUEST['name'])) {
    $name = $_REQUEST['name'];
    if (isset($_REQUEST['hello']) and $_REQUEST['hello'] == 1) {
        echo 'Привет, ' . $name;
    }
    else if (isset($_REQUEST['hello']) and $_REQUEST['hello'] == 0) {
        echo 'Пока, ' . $name;
    }
}
?>
<form action="" method="get">
    <input type="hidden" name="hello" value="0">
    <input type="checkbox" name="hello" value="1">
    <input type="text" name="name" placeholder="">
    <input type="submit">
</form>