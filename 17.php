<?php
/**
 * Created by PhpStorm.
 * User: Alek
 * Date: 15.03.16
 * Time: 19:53
 */
    echo "Составьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущий <br>";
    echo "месяц выведите жирным. Текущий месяц должен храниться в переменной $ month. <br><br>";
    $arrayMonth = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September',
                        'October', 'November', 'December');
    $date = date("F");
    foreach ($arrayMonth as $arrayElement) {
        if ($arrayElement == $date) { echo "<b> $arrayElement </b><br>";
        }
    else echo ($arrayElement . "<br>");
    }
?>