<?php
/**
 * Created by PhpStorm.
 * User: Alek
 * Date: 16.03.16
 * Time: 00:13
 */
    echo "Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 9 рядов, а не 5. <br>";
    for ($i = 0; $i <= 9; $i++) {
        for ($y = 0; $y < $i; $y++) {
            echo ("$i");
        }
        echo "<br>";
    }
?>