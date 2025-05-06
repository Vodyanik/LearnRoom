<?php

echo outputTaskConditionTemplate('Вывести на экран все целые числа от a до b, кратные некоторому числу c');

$a = 6;
$b = 300;
$c = 4;

for ($i = $a; $i <= $b; $i++) {
    if ($i % $c == 0) {
        echo $i . ' ';
    }
}
