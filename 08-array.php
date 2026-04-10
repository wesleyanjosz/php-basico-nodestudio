<?php

$car = [
    1 => 'bmw', 
    2 => 'veloster', 
    3 => 'hilux'
];
var_dump($car);
echo '<br>'.$car[1].'<br>';

$car[] = 'amarok';
$car[10] = 'camaro';
print_r($car);
echo '<br>';

$bike = [];
$bike[] = 'yamaha';
$bike[] = 'honda';
$bike[5] = 'suzuki';
print_r($bike);
echo '<br>';

$customer = [
    'wesley', 
    'rodrigo', 
    'felipe'
];
print_r($customer);
