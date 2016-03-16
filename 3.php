<?php
/**
 * Created by PhpStorm.
 * User: Alek
 * Date: 13.03.16
 * Time: 22:36
*/
    echo "Дан массив с элементами 26, 17, 136, 12, 79, 15. С помощью цикла foreach найдите сумму <br>";
    echo "квадратов элементов этого массива. Результат запишите переменную $ result. <br><br>";
    $result = 0;
    $arrayData = array('26', '17', '136', '12', '79', '15');
    foreach ($arrayData as $arrayElement) {
        $result = $result + pow($arrayElement, 2);
    }
    echo "Ответ: " . ($result);
?>