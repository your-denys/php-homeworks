<?php
// Исходный массив
$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];

// 1. Посчитать длину массива
$length = count($arr);
// var_dump($length);

// 2. Переместить первые 4 элемента в конец массива
$firstFour = array_splice($arr, 0, 4); // Вырезаем первые 4 элемента
$arr = array_merge($arr, $firstFour); // Объединяем оставшиеся элементы и вырезанные
// var_dump($arr);


// 3. Получить сумму 4-го, 5-го и 6-го элементов (после изменения массива)
$arrSum = $arr[3] + $arr[4] + $arr[5];
// var_dump($arrSum);


$firstArr = [

    'one' => 1,

    'two' => 2,

    'three' => 3,

    'foure' => 5,

    'five' => 12,

];

$secondArr = [

    'one' => 1,

    'seven' => 22,

    'three' => 32,

    'foure' => 5,

    'five' => 13,

    'six' => 37,

];

//   найти все элементы которые отсутствуют в первом массиве и присутствуют во втором


function uniqueArr($x, $y)
{
    $uniqueArr = [];
    foreach ($x as $key => $value) {
        if (!array_key_exists($key, $y)) {
            $uniqueArr[$key] = $value;
        }
    }
    return $uniqueArr;
}
$uniqueSecond = uniqueArr($secondArr, $firstArr);
// var_dump($uniqueSecond);

// найти все элементы которые присутствую в первом и отсутствуют во втором

$uniqueFirst = uniqueArr($firstArr, $secondArr);
// var_dump($uniqueFirst);

// найти все элементы значения которых совпадают 

$commonArr = [];
foreach ($secondArr as $key => $value) {
    if (array_key_exists($key, $firstArr) && $value == $firstArr[$key]) {
        $commonArr[$key] = $value;
    }
}
// var_dump($commonArr);

// найти все элементы значения которых отличается

$diffArr = [];
foreach ($secondArr as $key => $value) {
    if (array_key_exists($key, $firstArr) && $value != $firstArr[$key]) {
        $diffArr[$key] = [
            'secondArr' => $value,
            'firstArr' => $firstArr[$key],
        ];
    }
}
// var_dump($diffArr);

$firstArr = [

    'one' => 1,

    'two' => [

        'one' => 1,

        'seven' => 22,

        'three' => 32,

    ],

    'three' => [

        'one' => 1,

        'two' => 2,

    ],

    'foure' => 5,

    'five' => [

        'three' => 32,

        'foure' => 5,

        'five' => 12,

    ],

];

//   получить все вторые элементы вложенных массивов

$secondEl = [];

foreach ($firstArr as $key => $value) {
    if (is_array($value)) {
        $secondElement = array_values($value)[1] ?? null;
        if ($secondElement !== null) {
            $secondEl[$key] = $secondElement;
        }
    }
}
// var_dump($secondEl);

//   получить общее количество элементов в массиве
function countInside($arr)
{
    $count = 0;
    foreach ($arr as $value) {
        if (is_array($value)) {
            $count += countInside($value);
        } else {
            $count++;
        }
    }
    return $count;
}

$totalCount = countInside($firstArr);
// var_dump($totalCount);

//   получить сумму всех значений в массиве

function sumValue($arr)
{
    $count = 0;
    foreach ($arr as $value) {
        if (is_array($value)) {
            $count += sumValue($value);
        } else {
            $count += $value;
        }
    }
    return $count;
}
$totalSum = sumValue($firstArr);
// var_dump($totalSum);