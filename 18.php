<?php
/**
 * Created by PhpStorm.
 * User: Alek
 * Date: 15.03.16
 * Time: 20:13
 */
    echo "Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, <br>";
    echo "выходные дни следует вывести жирным. <br><br>";
    $arrayDay = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
    $day = date("l");
    foreach ($arrayDay as $arrayElement) {
        if ($arrayElement == $day) { echo "<b> $arrayElement </b><br>";
        }
    else echo ($arrayElement . "<br>");
    }
?>