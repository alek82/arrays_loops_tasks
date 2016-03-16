<pre>
    <?php
    /**
     * Created by PhpStorm.
     * User: Alek
     * Date: 14.03.16
     * Time: 09:43
     */
    echo "Дан массив $ arr. С помощью цикла foreach запишите английские названия в массив $ en, <br>";
    echo "а русские — в массив $ ru. $ arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'); <br>";
    echo "$ en = array('green', 'red','blue'); $ ru = array('зеленый', 'красный', 'голубой');<br><br>";
        $i=0;
        $arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
            foreach ($arr as $key => $arrayElement) {
                $i++;
                $en[$i] = $key;
                $ru[$i] = $arrayElement;
            }
        echo 'EN: ';
        print_r ($en);
        echo 'RU: ';
        print_r ($ru);
    ?>
</pre>

