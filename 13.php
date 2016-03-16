<?php
/**
 * Created by PhpStorm.
 * User: Alek
 * Date: 15.03.16
 * Time: 17:00
 */
    echo "Вывести таблицу умножения <br><br>";
    echo "<table><tr>";
    for ($i = 1; $i <= 10; $i++) {
        for ($y = 1; $y <= 10; $y++) {
            $result = $i * $y;
            if ($iLength = strlen ((string)$result) == 1) {  echo "<td>" . "| &nbsp" . $result . "&nbsp |" . "</td>"; }
                elseif ($iLength = strlen ((string)$result) == 2) {echo "<td>" . "| " . $result . " |" . "</td>";}
                    else {echo "<td>" . "|" . $result . "|" . "</td>";}
        }
        if ($i != 10) echo "</tr>";
    }
?>