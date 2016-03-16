<?php
/**
 * Created by PhpStorm.
 * User: Alek
 * Date: 16.03.16
 * Time: 09:07
 */
    echo "Ваше задание создать массив, наполнить это случайными значениями (функция rand), <br>";
    echo "найти максимальное и минимальное значение и поменять их местами. <br><br>";
    $Col = 12;
    $maxElement = 0;
    for($i=0;$i<$Col;$i++) {
        $Arr[$i]=rand(0,100);
    }
    foreach ($Arr as $arrayElement) {
        echo($arrayElement . " ");
    }
    echo "<br>";
    for ($i=0;$i<$Col;$i++) {
        if ($Arr[$i] > $maxElement) {
            $maxElement = $Arr[$i];
            $max_x = $i;
        }
    }
    $minElement = $maxElement;
    for ($i=0;$i<$Col;$i++) {
        if ($Arr[$i] < $minElement) {
            $minElement = $Arr[$i];
            $min_x = $i;
        }
    }
    list($Arr[$max_x], $Arr[$min_x]) = array($Arr[$min_x], $Arr[$max_x]);
    foreach ($Arr as $arrayElement) {
        echo ($arrayElement . " ");
    }
?>