<?php
$names = [
    'primo' => 'wesley',
    'vizinho' => 'alice',
    'pai' => 'felipe',
    'mae' => 'maria'
];

if(is_array($names)) {
    echo 'é um array<br>';
} else {
    echo 'não é array<br>';
}

if(in_array('wesley', $names)) {
    echo 'existe no array<br>';
} else {
    echo 'não existe no array<br>';
}

$keys = array_keys($names);
print_r($keys);

//parte02
$values = array_values($names);
print_r($values);
echo '<br>';

$cars = [
    'camaro',
    'uno',
    'gol'
];

$bikes = [
    'pop100',
    '50cc',
    'cb1000'
];

$vehicles = array_merge($cars, $bikes);
print_r($vehicles);
echo '<br>';
echo array_pop($cars);
echo '<br>';
print_r($cars);
echo '<br>';
echo array_shift($cars);
echo '<br>';
print_r($cars);
echo '<br>';

//parte03
$fruit = [
    'uva',
    'laranja',
    'maça'
];
print_r($fruit);
echo '<br>';
array_unshift($fruit, 'manga', 'acerola', 'morango');
print_r($fruit);
echo '<br>';

array_push($fruit, 'manga', 'acerola', 'morango');
print_r($fruit);
echo '<br>';

$keys = [
    'campeao',
    'vice',
    'terceiro'
];

$values = [
    'vasco',
    'flamengo',
    'botafogo'
];

$times = array_combine($keys, $values);
print_r($times);
echo '<br>';

$sum = [5, 6, 10, 8];
echo array_sum($sum);
