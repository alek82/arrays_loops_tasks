<?php
/**
 * Created by PhpStorm.
 * User: Alek
 * Date: 15.03.16
 * Time: 18:53
 */
    echo "Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach и <br>";
    echo "оператора if выведите на экран столбец элементов массива, как показано на <br>";
    echo "картинке. 1, 2, 3 4, 5, 6 7, 8, 9 <br><br>";
    $arrayData = array('1', '2', '3', '4', '5', '6', '7', '8', '9');
    foreach ($arrayData as $arrayElement) {
        if (($arrayElement == 3) or ($arrayElement == 6) or ($arrayElement == 9)) echo ($arrayElement . " ");
        else echo ($arrayElement . ", ");
    }
?>