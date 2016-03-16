<?php
/**
 * Created by PhpStorm.
 * User: Alek
 * Date: 13.03.16
 * Time: 22:04
 */
    echo "Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'. С помощью цикла foreach <br>";
    echo "выведите эти слова в столбик.<br><br>";
    $arrayData = array('html', 'css', 'php', 'js', 'jq');
    foreach ($arrayData as $Data) {
        echo $Data . "<br />";
    }
?>