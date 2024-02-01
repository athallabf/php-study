<?php


$outside = 'diluar function';
function globalScope($message)
{
  global $outside; // kalo ga di kasih global dia gabisa akses $outside
  echo "message: $message dan $outside";
}
// globalScope('ngops');


function sum($a = 1, $b = 2)
{
  return $a + $b;
}
$sum = sum();
// echo ($sum);

$multiply = function ($a, $b) {
  return $a * $b;
};

// echo $multiply(1, 2);
$num = 5;
function addFive(&$value)
{
  $value += 5;
}
addFive($num);
// echo $num; //10
function sumAll(...$x)
{
  $sum = 0;
  foreach ($x as $num) {
    $sum += $num;
  }
  echo $sum;
};
// sumAll(1, 2, 3, 4, 5);

// $arrow = fn ($a, $b) => $a;;
// $arrow = fn ($a) => $a;
// echo $arrow(1);
