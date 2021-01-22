<?php

$myName         = 'Hector ';
$myLastName     = 'Siman';

echo $myName . $myLastName; // YOU USE DOTS TO CONCATENATE
echo "\n";
echo true . ' is true';     // YOU'LL SEE "1 IS TRUE"
echo "\n";
var_dump(true . '');        // YOU'LL SEE "1" AS A STRING
echo "\n";
echo true . true;           // THE OUTPUT IS ONE ONE, NOT ELEVEN
echo "\n";
echo 1.1 . 2.2;             // WE'LL SEE 1.12.2, PHP UNDERSTAND DECIMALS
echo "\n";
echo 1 . 1 . 2 . 2;             // DOTS ARE VERY IMPORTANT, SO THE SPACES BETWEEN ARE ALSO NECESSARY
echo '$myName is ' . $myName;
