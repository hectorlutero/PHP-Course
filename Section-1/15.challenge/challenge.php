<?php

/**
 * CHALLENGE: Using the sentence below, use the indices of each character and copy
 * those to an array. Remember to use the concatenation operator to attach characters
 * to one another.
 * 
 * You can use explicit index numbers, or use the code in the sample below to attach
 * new items to an array.
 */

$sentence = "Hello my name is Jimmy Pop and I'm a dumb white guy!";
$wordArray = [];
// $wordArray = [
//     0   => "hello ",
//     1   => "my ",
//     2   => "name ",
//     3   => "is ",
//     4   => "Jimmy ",
//     5   => "Pop ",
//     6   => "and ",
//     7   => "I'm ",
//     8   => "a ",
//     9   => "dumb ",
//     10  => "white ",
//     11  => "guy!",

// ];
// for ($i = 0; $i < count($wordArray); $i++){
    
//     echo $wordArray[$i];
// }
// echo $wordArray[0].$wordArray[1];

// Sample:

$wordArray[0]   = [$sentence[0].$sentence[1].$sentence[2].$sentence[3].$sentence[4]];
$wordArray[1]   = [$sentence[6].$sentence[7]];
$wordArray[2]   = [$sentence[9].$sentence[10].$sentence[11].$sentence[12]];
$wordArray[3]   = [$sentence[14].$sentence[15]];
$wordArray[4]   = [$sentence[17].$sentence[18].$sentence[19].$sentence[20].$sentence[21]];
$wordArray[5]   = [$sentence[23].$sentence[24].$sentence[25]];
$wordArray[6]   = [$sentence[27].$sentence[28].$sentence[29]];
$wordArray[7]   = [$sentence[31].$sentence[32].$sentence[33]];
$wordArray[8]   = [$sentence[34]];
$wordArray[9]   = [$sentence[36].$sentence[37].$sentence[38].$sentence[39]];
$wordArray[10]  = [$sentence[41].$sentence[42].$sentence[43].$sentence[44].$sentence[45]];
$wordArray[11]  = [$sentence[47].$sentence[48].$sentence[49].$sentence[50]];

echo "<br><br>";

var_dump($wordArray);

echo "<br><br>";

for ($i = 0; $i < strlen($sentence); $i++) {
    $wordArray[$i] = [$sentence[$i]];
    print $sentence[$i];
}