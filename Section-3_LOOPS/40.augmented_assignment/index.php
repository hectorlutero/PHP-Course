<?php

// THEY ARE THE SAME THING
// $i = $i + 2;
// $i += 2;
// var_dump($i);

$i = 0;
$i = $i + 2;
var_dump($i);
echo "<br>";

$j = 0;
$j += 2;
var_dump($j);
echo "<br>";

$k = 0;
$k -= 2;
var_dump($k);
echo "<br>";

$l = 0;
$l /= 2;
var_dump($l);
echo "<br>";

// THIS WILL RETURN AN ERROR
// $m = 2;
// $m /= 0;
// var_dump($m);
// echo "<br>";

$number = 2;
$zero /= 0;
$number = $zero === 0 ? 0 : $number/$zero;
var_dump($number);
echo "<br>";




