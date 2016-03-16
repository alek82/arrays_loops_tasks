<?php
/**
 * Created by PhpStorm.
 * User: Alek
 * Date: 16.03.16
 * Time: 08:42
 */
    echo "Вам нужно разработать программу, которая считала бы количество вхождений какой­нибуть <br>";
    echo "выбранной вами цифры в выбранном вами числе. Например: цифра 5 в числе 442158755745 <br>";
    echo "встречается 4 раза. <br><br>";
    $number = 1231243451;
    $cyfra = 1;
    if (isset($number)) {
        $arrChars = preg_split('//', $number, 0);
        $col = 0;
        foreach ($arrChars as $char) {
            if ($char == $cyfra) $col++;
        }
    }
    echo 'Повторяется число ' . $cyfra . ' - ' . $col . " раза.";
?>