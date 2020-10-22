<?php

include 'car.php';

$automobilis = new car();
$automobilis->spalva = 'raudona';
$automobilis->greitis = '50km/h';
$automobilis->durys = 5;

echo $automobilis->gautiSpalva() . "<br>";
$automobilis->vaziuoti();
