<?php

//Pirma

$ceu = ["Italija"=>"Roma", "Vokietija"=>"Berlynas", "Lietuva"=>"Vilnius"];

foreach($ceu as $country => $capital) {
    echo "$country = $capital<br>";
}
echo "<br>";

//Antra

sort($ceu);
    foreach($ceu as $country => $capital) {
        echo "$country = $capital<br>";
    }
echo "<br>";

//Trecia

$arr=[];
foreach ($ceu as $item) {
    $arr[] = $item;
}
$c=2;
for ($x = 0; $x < count($arr); $x+=$c) {
    echo "$arr[$x] <br>";
}

//Ketvirta




?>