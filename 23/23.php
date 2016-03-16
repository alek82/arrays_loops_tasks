<HTML>
<BODY>
<p>Вам нужно разработать программу, которая считала бы сумму цифр числа введенного пользователем.
    Например: есть число 123, то программа должна вычислить сумму цифр 1, 2, 3, т. е. 6.</p>

<form action="23.php" method="GET">
    Число: <br/>
    <input type="number" name="element" maxlength="2" title="Введите число">
    <br>
    <input name="submit" type="submit" title="Проверка"/>
</form>
</BODY>
</HTML>

<?php
/*
 * Created by PhpStorm.
 * User: Alek
 * Date: 16.03.16
 * Time: 00:22
 */
    $number = $_GET['element'];
    if (preg_match('/^\d+$/', $number)) echo ""; else {
        echo "Вы не ввели число!";
        exit;
    }
    if (isset($number)) {
        $arrChars = preg_split('//', $number, 0);
        $summ = 0;
        foreach ($arrChars as $char) $summ = $summ + (int)$char;
    echo 'Сумма цифр числа ' . $number . ': ' . $summ;
    }
?>