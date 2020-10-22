<?php declare(strict_types=1);

function sandauga(float $a, float $b): float {
    return $a * $b;
}

$z = sandauga(1.8, 2);
echo sandauga(sandauga(3, 3), $z);

$j = 0;
while ($j < 10){
    echo sandauga($z, $j) . '<br>';
    $j++;
}
?>