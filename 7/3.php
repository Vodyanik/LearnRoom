<div style="margin: 30px; text-align: center;">
	<a href="/">Home...</a>
	<h3>Условие задачи</h3>
	<p>	Найти сумму положительных нечетных чисел, меньших 50
	</p>
	<h3>Результат: </h3>
</div>

<?php

$sum = 0;

for ($i = 0; $i < 50; $i++) {
	if ($i % 2 != 0) {
	$sum += $i;
	}
}
echo  $sum;
