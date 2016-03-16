<?php
/**
 * Created by PhpStorm.
 * User: Alek
 * Date: 15.03.16
 * Time: 18:01
 */
    echo "Дан массив с элементами 4, 2, 5, 19, 13, 0, 10. С помощью цикла foreach и оператора if <br>";
    echo "проверьте есть ли в массиве элемент со значением $ e, равном 2, 3 или 4. Если <br>";
    echo "есть — выведите на экран 'Есть!', иначе выведите 'Нет!'.<br><br>";
    $arrayData = array('4', '2', '5', '19', '13', '0', '10');
    $result1 = False;
    $result2 = False;
    $result3 = False;
    foreach ($arrayData as $arrayElement) {
        if ($arrayElement == 2) {
            echo "Элемент " . $arrayElement . " - Есть! <br>";
            $result1 = True;
        } elseif ($arrayElement == 3) {
            echo "Элемент " . $arrayElement . " - Есть! <br>";
            $result2 = True;
        } elseif ($arrayElement == 4) {
            echo "Элемент " . $arrayElement . " - Есть! <br>";
            $result3 = True;
        }
    }
    if ($result1 == False) echo "Элемента 2 - Нет! <br>";
    if ($result2 == False) echo "Элемента 3 - Нет! <br>";
    if ($result3 == False) echo "Элемента 4 - Нет! <br>";
?>