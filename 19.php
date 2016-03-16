<?php
/**
 * Created by PhpStorm.
 * User: Alek
 * Date: 16.03.16
 * Time: 00:06
 */
    echo "Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, <br>";
    echo "а текущий день выведите курсивом. Текущий день должен храниться в переменной $ day. <br><br>";
    $arrayDay = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
    $day = date("l");
    foreach ($arrayDay as $arrayElement) {
        if ($arrayElement == $day) { echo "<i> $arrayElement </i><br>";
    }
    else echo ($arrayElement . "<br>");
    }
?>