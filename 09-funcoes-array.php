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