<?php
/**
 * Created by PhpStorm.
 * User: Alek
 * Date: 14.03.16
 * Time: 09:28
 */
    echo "Дан массив $ arr с ключами 'Коля', 'Вася', 'Петя' с элементами '200', '300', '400'. <br>";
    echo "С помощью цикла foreach выведите на экран столбец строк такого формата: 'Коля — зарплата <br>";
    echo "200 долларов.'. <br><br>";
    $arr = array('Коля' => '200', 'Вася' => '300','Петя' => '400');
    foreach ($arr as $key => $arrayElement) {
        echo $key . ' - зарплата  ' ;
        echo $arrayElement . ' долларов <br /> ' ;
    }
?>