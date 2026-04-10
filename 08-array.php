<?php
//arrays numéricos
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
echo '<hr>';

//count
$totCustomer = count($bike);
echo $totCustomer.'<br>';

//foreach
foreach ($car as $value) {
    echo $value.'<br>';
}
echo '<hr>';

//arrays associativos
$people = [
    'name' => 'wesley',
    'age' => 29,
    'height' => 1.70
];
echo $people['age'].'<br>';
$people['cidade'] = 'santo andré';
print_r($people);
echo '<br>';

foreach ($people as $index => $value) {
    echo $index.' -> '.$value.'<br>'; 
}

//arrays multidimensionais
$times = [
    'carioca' => [
        'campeao' => 'vasco',
        'vice' => 'flamengo',
        'terceiro' => 'botafogo'
    ],
    'paulista' => [
        'santos',
        'são paulo',
        'palmeiras'
    ],
    'baiano' => [
        'bahia',
        'vitoriá',
        'itabuna'
    ]
];

echo '<hr>';
echo $times['carioca']['campeao'].'<br>';

foreach($times['carioca'] as $i => $v) {
    echo $i.' -> '.$v.'<br>';
}