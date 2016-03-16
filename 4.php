<?php
/**
 * Created by PhpStorm.
 * User: Alek
 * Date: 13.03.16
 * Time: 23:00
*/
    echo "Дан массив $ arr. С помощью первого цикла foreach выведите на экран столбец ключей, <br>";
    echo "с помощью второго — столбец элементов. <br>";
    echo "$ arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'); <br><br>";
    $arr = array('green' => 'зеленый', 'red' => 'красный','blue' => 'голубой');
    foreach ($arr as $key => $arrayElement) {
        echo $key . ' - ' ;
        echo $arrayElement . '<br /> ' ;
    }
?>