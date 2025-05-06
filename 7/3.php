<?php

echo outputTaskConditionTemplate('Найти сумму положительных нечетных чисел, меньших 50');

$sum = 0;

for ($i = 0; $i < 50; $i++) {
    if ($i % 2 != 0) {
        $sum += $i;
    }
}

echo $sum;
