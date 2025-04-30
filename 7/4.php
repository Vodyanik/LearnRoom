<div style="margin: 30px; text-align: center;">
	<a href="/">Home...</a>
	<h3>Условие задачи</h3>
	<p>	Найти сумму целых положительных чисел из промежутка от a до b, кратных четырем.
	</p>
	<h3>Результат: </h3>
</div>

<?php

$a = -10.5;
$b = 100;
$sum = 0;

for ($i = (int) $a; $i < $b; $i++) {
    if ($i > 0 && $i % 4 == 0) {
        $sum += $i;
    }
}

echo $sum;
