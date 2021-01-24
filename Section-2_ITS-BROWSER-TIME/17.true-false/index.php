<?php

$true   = true;
$false  = false;


$truthy = 1; // Thruthiness is true!
$falsey = 0; // Thruthiness is false (or falsey!)

var_dump($truthy == $true);

echo "<br><br>";

var_dump([] == $true);

echo "<br><br>";

var_dump("" == $true);

echo "<br><br>";

var_dump([""] == $true);

echo "<br><br>";

var_dump("" == $false);

echo "<br><br>";

var_dump("" === $false);

echo "<br>";

var_dump("" === false);

echo "<br><br>";

var_dump(false === false);

echo "<br><br>";

var_dump(true === false);

