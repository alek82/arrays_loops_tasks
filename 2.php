<?php
/**
 * Created by PhpStorm.
 * User: Alek
 * Date: 13.03.16
 * Time: 22:14
 */
    echo "Дан массив с элементами 1, 20, 15, 17, 24, 35. С помощью цикла foreach найдите сумму <br>";
    echo "элементов этого массива. Запишите ее в переменную $ result.<br><br>";
    $result = 0;
    $arrayData = array('1', '20', '15', '17', '24', '35');
    foreach ($arrayData as $arrayElement) {
        $result += $arrayElement;
    }
    echo "Ответ: " . ($result);
?>