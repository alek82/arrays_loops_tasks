<?php
/**
 * Created by PhpStorm.
 * User: Alek
 * Date: 15.03.16
 * Time: 16:41
 */
    echo "Дано число $ n = 1000. Делите его на 2 столько раз, пока результат деления не станет <br>";
    echo "меньше 50. Какое число получится? Посчитайте количество итераций, необходимых для этого <br>";
    echo "(итерации — это количество проходов цикла), и запишите его в переменную $ num. <br><br>";
    $n = 1000;
    $num = 0;
    while($n >= 50)
    {
        $n = $n / 2;
        $num++;
    }
    echo "Ответ: " . $num;
?>