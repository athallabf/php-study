<?php
$arri = [1,2,3];
$arrayFunc = array('ngops',2,3);
// echo $arrayFunc;
// print_r($arrayFunc[1]);
// create your own index
$mobil = [
  1 => 'ngops',
  2 => 23,
  'kons' => 'jaja'
];

// echo $mobil['kons']; 

// multidimensional array
$object = [
  1 =>
  [
    1 => 'ngops'
  ],
  2 =>
  [
    'dua' => '2'
  ]
];
// echo $object[2]['dua'];
var_dump(json_encode($mobil));
