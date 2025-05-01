<div style="margin: 30px; text-align: center;">
	<a href="/">Home...</a>
	<h3>Условие задачи</h3>
	<p>	Вывести на экран все целые числа от a до b, кратные некоторому числу c
	</p>
	<h3>Результат: </h3>
</div>

<?php

$a = 6;
$b = 300;
$c = 4;

for ($i = $a; $i <= $b; $i++) {
	if ($i % $c == 0) {
		echo $i . ' ';
	}
}
