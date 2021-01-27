<?php

function factorial(int $n) : int {

    if ($n === 1) {
        return 1;
    }
    echo "$n <br>";
    return $n + factorial($n-1);
}

echo factorial(10) . "<br>";
echo factorial(9) . "<br>";
echo factorial(8) . "<br>";
echo factorial(7) . "<br>";
echo factorial(6) . "<br>";
echo factorial(5) . "<br>";
echo factorial(4) . "<br>";
echo factorial(3) . "<br>";