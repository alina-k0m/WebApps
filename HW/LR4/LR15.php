<?php echo '15. Спросите у пользователя его возраст с помощью select. Варианты ответа сделайте
              такими: <b>менее 20 лет, 20-25, 26-30, более 30</b>.', '<br/>', '<br/>';

if (isset($_REQUEST['age'])) {
    switch ($_REQUEST['age']) {
        case 1:
            echo 'Ваш возраст: менее 20';
            break;
        case 2:
            echo 'Ваш возраст: 20-25';
            break;
        case 3:
            echo 'Ваш возраст: 26-30';
            break;
        case 4:
            echo 'Ваш возраст: более 30';
            break;
    }
}
?>
<form action="" method="get">
    <select name="age" id="">
        <option value="1">менее 20</option>
        <option value="2">20-25</option>
        <option value="3">26-30</option>
        <option value="4">более 30</option>
    </select>
    <input type="submit">
</form>