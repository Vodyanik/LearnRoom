<?php

echo outputTaskConditionTemplate('Найти сумму целых положительных чисел из промежутка от a до b, кратных четырем.');

$a = -10.5;
$b = 100;
$sum = 0;

for ($i = (int) $a; $i < $b; $i++) {
    if ($i > 0 && $i % 4 == 0) {
        $sum += $i;
    }
}

echo $sum;
