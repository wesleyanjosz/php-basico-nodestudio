<?php
$name = 'Wesley Anjos';
$a = 1;
$b = 3;
$c = 7;

function name() {
    global $name;
    echo $name;
}

name();
echo '<hr>';

function city() {
    $city = 'São Paulo';
}

city();
echo $city;
echo '<hr>';

function plus() {
    echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}

plus();