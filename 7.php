<?php
/**
 * Created by PhpStorm.
 * User: Alek
 * Date: 14.03.16
 * Time: 11:45
 */
    echo "Дан массив с элементами 2, 5, 9, 15, 0, 4. С помощью цикла foreach и оператора if выведите <br>";
    echo "на экран столбец тех элементов массива, которые больше 3­х, но меньше 10. <br><br>";
    $arr = array('2', '5', '9', '15', '0', '4');
    foreach ($arr as $arrayElement) {
        if ($arrayElement > 3 && $arrayElement <10) {
            echo "$arrayElement <br>";
        }
    }
?>