<?php

// Создать функцию принимающую массив произвольной вложенности и определяющий
//  любой элемент номер которого передан параметром во всех вложенных массивах.

function findElement(array $arr, int $index): array
{
    $el = [];
    foreach ($arr as $key => $val) {
        if (is_array($val)) {
            $el = array_merge($el, findElement($val, $index)); 
        } elseif ($key === $index) {
            $el[] = $val; 
        }
    }
    return $el;
}

$array = [
    "a" => [1, 2, 3],
    "b" => [
        "c" => [4, 5, 6],
        "d" => [7, 8, 9],
    ],
    "e" => [10, 11, 12]
];

$index = 1;
$result = findElement($array, $index);
// var_dump($result);

// Создать функцию которая считает все буквы b в переданной строке, в случае если передается не строка функция должна возвращать false

function countB(string $str): bool| int
{
    if (!is_string($str)) {
        return false;
    }
    $strLower = mb_strtolower($str);
    $count = substr_count($strLower, 'b');
    return $count;
}
// var_dump(countB('abcBcdb'));

//Создать функцию которая считает сумму значений всех элементов массива произвольной глубины

function sumOfArray(array $arr): int {
    $sum = 0;
    foreach ($arr as $val) {
    if (is_array($val)) {
        $sum += sumOfArray($val);
    } else {
        $sum += $val;
    }
}
return $sum;
}
$numbsArr = [1, 2, 3, [1,2,3, [1,2,3]]];
// var_dump(sumOfArray($numbsArr));


//Создать функцию которая определит сколько квадратов меньшего размера можно вписать в квадрат большего размера размер возвращать в float

function countSquares( float $biggest, float $smaller) : float {
    $result = $biggest / $smaller;
    return $result * $result ;
}
// var_dump(countSquares(10,2));