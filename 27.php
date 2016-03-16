<?php
/**
 * Created by PhpStorm.
 * User: Alek
 * Date: 16.03.16
 * Time: 10:49
 */
    echo "Создать генератор случайных таблиц. Есть переменные: $ row - кол-во строк в таблице, <br>";
    echo "$ cols - кол-во столбцов в таблице. Есть список цветов, в массиве: <br>";
    echo "$ colors = array('red','yellow','blue','gray','maroon','brown','green'). <br>";
    echo "Необходимо создать скрипт, который по заданным условиям выведет таблицу размера $ rows <br>";
    echo "на $ cols, в которой все ячейки будут иметь цвета, выбранные случайным образом из массива <br>";
    echo "$ colors. В каждой ячейке должно находиться случайное число. <br><br>";
    $row = 4;
    $cols = 8;
    $ArrColor = array('red', 'yellow', 'blue', 'gray', 'maroon', 'brown', 'green');
    echo "<table><tr>";
        for ($x=0;$x<$row;$x++) {
            for ($i = 0; $i < $cols; $i++) {
                $color = $ArrColor[rand(0, count($ArrColor)-1)];
                echo "<td bgcolor='" . $color . "' width = 40px align = 'center'>  " . rand(0, 100) . "  </td>";
            }
            echo "</tr>";
        }
?>