

<form action="" method="get">
    Введите число: <input type='number' name='num' required>
    <input type="submit">
</form>

<?php echo
       <<<END
             <p>1. Разработать программу, которая считала бы сумму цифр числа, определенного в
                 переменной PHP-скрипта. Например: есть число 123, то программа должна вычислить
                 сумму цифр 1, 2, 3, т.е. 6.</n></p>
       END;

       echo array_sum(str_split($_REQUEST['num'])), '<br/>';
       /* required в form - обязательно поле */
       ?>