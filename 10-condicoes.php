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
echo $avg >= 7 ? 'aprovado<br>' : 'reprovado<br>';

//switch
$color = 'red';

switch($color) {
    case 'red':
        echo 'Cor vermelha<br>';
        break;
    case 'yellow': 
        echo 'cor amarela<br>'; 
        break;
    case 'green': 
        echo 'cor verde<br>'; 
        break;
    default: echo 'cor diferente<br>';
}
