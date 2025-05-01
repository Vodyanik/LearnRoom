<div style="margin: 30px; text-align: center;">
	<a href="/">Home...</a>
	<h3>Условие задачи</h3>
	<p>	Определить количество натуральных чисел из интервала от 100 до 500, сумма цифр которых равна 15.
	</p>
	<h3>Результат: </h3>
</div>

<?php

$count = 0;

for ($i = 100; $i <= 500; $i++) {
	$one = (int) $i / 100;
	$two = (int) ($i / 10) % 10;
	$three = (int) $i % 10;
	$sum = (int) ($one + $two + $three);

	if ($sum === 15) {
		echo $i . "  ";
		$count++;
	}
}

echo "<br>" . "Выведено $count раз";
