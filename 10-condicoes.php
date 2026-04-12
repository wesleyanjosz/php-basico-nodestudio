<?php
$num = 10;

if($num == 10) {
    echo 'É igual a 10<br>';
} elseif($num <= 9) {
    echo '´e menor que 9<br>';
} else {
    echo 'É diferente de 10<br>';
}

echo '<hr>';

$avg = 7;
echo $avg >= 7 ? 'aprovado' : 'reprovado';
