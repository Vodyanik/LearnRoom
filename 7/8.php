<?php

echo outputTaskConditionTemplate("Найти: а) все двузначные числа, сумма квадратов цифр которых делится на 13; б) все двузначные числа, обладающие следующим свойством: если к сумме цифр числа прибавить квадрат этой суммы, то получится снова искомое число;");

// variant #0

//$result = ['sum' => [], 'sum2' => []];
//
//for ($i = 10; $i < 100; $i++) {
//    $one = (int) ($i / 10);
//    $two = $i % 10;
//    $sum = ($one * $one) + ($two * $two);
//    $sum2 = $one + $two;
//
//    if ($sum % 13 === 0) {
//        $result['sum'][] = $i;
//    }
//
//    if (($sum2 + $sum2 * $sum2) === $i) {
//        $result['sum2'][] = $i;
//    }
//}
//
//print_r($result);

// ------------------------------------------------------------------

// variant #1

//for ($i = 10; $i < 100; $i++) {
//    $one = (int) ($i / 10);
//    $two = $i % 10;
//    $sumA = ($one * $one) + ($two * $two);
//    $sumB = $one + $two;
//
//    if ($sumA % 13 === 0) {
//        $result['sumA'][] = $i;
//    }
//
//    if (($sumB + $sumB * $sumB) === $i) {
//        $result['sumB'][] = $i;
//    }
//}
//
//echo 'SumA: ' . implode(', ', $result['sumA'] ?? []) . '<br>';
//echo 'SumB: ' . implode(', ', $result['sumB'] ?? []) . '<br>';

// ------------------------------------------------------------------

// variant #2

$concatSumA = '';
$concatSumB = '';

function concatSum(string $concatSum, int $value): string
{
    return empty($concatSum) ? $value : ', ' . $value;
}

for ($i = 10; $i < 100; $i++) {
    $one = (int) ($i / 10);
    $two = $i % 10;
    $sumA = pow($one, 2) + pow($two, 2);
    $sumB = $one + $two;

    if ($sumA % 13 === 0) {
        $concatSumA .= concatSum($concatSumA, $i);
    }

    if (($sumB + pow($sumB, 2)) === $i) {
        $concatSumB .= concatSum($concatSumB, $i);
    }
}

echo 'SumA: ' . $concatSumA . '<br>';
echo 'SumB: ' . $concatSumB . '<br>';