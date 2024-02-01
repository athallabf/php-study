<?php

$colors = ['red', 'blue', 'purple'];

$more = ['green', 'yellow', 'orange'];
// push a value to an array
// $colors["phone"] = 'poco';

// foreach ($more as $color) {
//   $colors[] = $color;
// }

// $moreColors = [...$more, ...$colors];
$combineColors = array_combine($colors, $more);

// print_r($combineColors);

// $colorsMap = array_map(function ($color) {
//   echo "$color";
// }, $colors);

$colorsFilter = array_filter($colors, fn ($color) => $color != 'orange');
// print_r($colorsFilter)

$numbers = [1,2,3,4,5,6,7];

$numbersReduce = array_reduce($numbers, fn($accumulator, $number) => $accumulator + $number);
// echo $numbersReduce;
