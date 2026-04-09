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

/* compostos */
$car = array('gol', 'uno', 'camaro', 12, 20.6, true);
var_dump($car);
if (is_array($admin)) {
    echo 'é um array<br>';
} else {
    echo 'não é um array<br>';
}

echo "<hr>";

//object
class Custom {
    public $name;
    
    function getName($name) {
        $this->name = $name;
    }
}

$custom = new Custom();
$custom->getName('Wesley');
var_dump($custom);
if (is_object($custom)) {
    echo 'é um objeto<br>';
} else {
    echo 'não é um objeto<br>';
}

/* especiais */
//null
$city = null;
var_dump($city);

//resource
