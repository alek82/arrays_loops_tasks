<?php
/**
 * Created by PhpStorm.
 * User: Alek
 * Date: 15.03.16
 * Time: 18:31
 */
    echo "Дан массив $ arr. С помощью цикла foreach и переменной $ count подсчитайте <br>";
    echo "количество элементов этого массива. Проверьте работу скрипта на примере массива с <br>";
    echo "элементами 4, 2, 5, 19, 13, 0, 10. <br><br>";
    $arr = array('4', '2', '5', '19', '13', '0', '10');
    $count = 0;
    foreach ($arr as $arrayElement) {
        if (isset($arrayElement) == True) $count++;
    }
    echo "Ответ: " . $count;
?>