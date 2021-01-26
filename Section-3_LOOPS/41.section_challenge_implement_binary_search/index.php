<?php

/*
 * See: https://en.wikipedia.org/wiki/Binary_search_algorithm
 * 
 * Binary search allows you to search sorted data by dividing it in half
 * repeatedly until you find the target item. It works just like
 * if you searched a paper phonebook to find someone by name.
 * 
 * Implement binary search using the knowledge you've gained in this section
 * in order to find the index of the number 16 in the following array.
 * 
 * Bonus: What's the Big-O notation for Binary Search for
 * memory and running time.
 */

$numbers = [1, 3, 6, 8, 9, 10, 13, 16, 22, 23, 28];
$n = count($numbers);
$minIndex = 0;
$maxIndex = $n - 1;
$t = 1;

while (true) {

    $index = floor(($maxIndex - $minIndex)/2) + $minIndex;
    $number = $numbers[$index];
    echo "maxIndex: $maxIndex - minIndex: $minIndex <br> index: $index<br> number: $number<br>";
    if ($number === $t) {
        echo $number . " found at index " . $index;
        break;
    } else if ($minIndex >= $maxIndex) {
        echo "$t was Not Found at Array";
        break;
    }

    if ($number < $t) {
        $minIndex = $index + 1;
    } else {
        $maxIndex = $index - 1;
    }
}


// binarySearch($numbers, $n, 16, $m);