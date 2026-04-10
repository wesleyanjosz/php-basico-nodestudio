<?php
//constantes
define('NAME', 'Wesley Anjos');
define('AGE', 29);
define('HEIGHT', 1.89);
define('MARRIED', true);

echo NAME;
var_dump(NAME);
var_dump(AGE);
var_dump(HEIGHT);
var_dump(MARRIED);

echo '<br>Meu nome é '.NAME.', minha idade é '.AGE.' e minha altura é '.HEIGHT.'.<br>';

define('TIMES', ['vasco', 'flamengo', 'santos']);
echo TIMES[0].'<br>';
echo TIMES[1].'<br>';
echo TIMES[2].'<br>';
var_dump(TIMES);

function name() {
    echo '<br>'.NAME;
}

name();