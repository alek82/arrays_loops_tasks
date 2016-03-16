<?php
/**
 * Created by PhpStorm.
 * User: Alek
 * Date: 14.03.16
 * Time: 11:52
 */
    echo "Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach создайте строку <br>";
    echo "­1­2­3­4­5­6­7­8­9­. Циклы while и for <br><br>";
    $arrayData = array('1', '2', '3', '4', '5', '6', '7', '8', '9');
    foreach ($arrayData as $arrayElement) {
        echo "-". ($arrayElement);
    }
    echo "-";
?>