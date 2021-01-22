<?php

$myArray    = [1, 2, 3, 4, 5];
$charArray  = ["H", "e", "l", "l", "o"];
$word       = "Hello";

echo $word[-1];
echo "\n";
echo $charArray[-1]; // WE'LL SEE AN ERROR, BECAUSE IT'S ACTUALLY AN ARRAY
echo "\n";

$hashmap = [
    1       => "First",
    "sec"   => "Second",
    true    => "Third",
    false   => "Fourth",
    "array" => $myArray
];
// $HASHMAP = [
//     KEY => VALUE
// ];

// echo $hashmap[0]; // THIS GONNA PRINT AN ERROR

echo $hashmap[1];   // 1 IS THE SAME VALUE FOR BOOLEAN TRUE 
echo "\n";
echo $hashmap["sec"];
echo "\n";
echo $hashmap["true"];  // WHEN YOU HAVE TWO KEYS WITH THE SAME VALUE, IT WILL ECHO OUT ONLY THE LAST ONE.
echo "\n";
echo $hashmap[0];
echo "\n";
echo $hashmap[false];
echo "\n";
// echo $hashmap["array"]; // THIS WILL DISPLAY AN ERROR, BECAUSE YOU'RE TRYING TO DISPLAY AN ARRAY AS A STRING, AIN'T GONNA WORK
var_dump($hashmap["array"]); // THAT'S THE CORRECT WAY

$nestedIndex = [
    1, 2, 3, 4, 5, [
        6, 7, 8, 9, "hi", true, "1", 1.21
    ],
];

var_dump($nestedIndex[5]);
