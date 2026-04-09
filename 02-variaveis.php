<?php
$name = 'wesley dos anjos';
$age = 29;
$height = 1.70;

echo "<p>Meu nome é $name, minha idade é $age e minha altura é $height</p>";
echo '<p>Meu nome é '. ucwords($name). ', minha idade é '. $age . ' e minha altura é '. number_format($height, 2, ','). '</p>';

$name = 'Felipe Cabral';
$age = 29;
$height = 1.90;
echo "<p>Meu nome é $name, minha idade é $age e minha altura é $height</p>";

$car = 'Hilux';
echo $car.'<br>';