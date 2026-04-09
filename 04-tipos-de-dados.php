<?php

/* escalares */
//string
$name = 'wesley';
var_dump($name);
if (is_string($name)) {
    echo 'é uma string<br>';
} else {
    echo 'não é uma string<br>';
}

//int
$age = 29;
var_dump($age);
if (is_int($age)) {
    echo 'é um integer<br>';
} else {
    echo 'não é um integer<br>';
}

//float
$height = 1.77;
var_dump($height);
if (is_float($height)) {
    echo 'é um float<br>';
} else {
    echo 'não é um float<br>';
}

//boolean
$admin = true;
var_dump($admin);
if (is_bool($admin)) {
    echo 'é um boolean<br>';
} else {
    echo 'não é um boolean<br>';
}
