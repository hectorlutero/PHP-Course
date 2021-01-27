<?php 

// $greeter = function ($name) {
//     echo " Hello $name!";    
// };

// $greeter("Hector");


// THIS WILL DISPLAY AN ERROR

// $name = "Hector";
// $greeter = function () : string {
//     return " Hello $name!";
// };

// $greeter("Hector");

// YOU CAN ONLY USE use(), in nameless functions.
// $name = "Hector";
// $greeter = function () use($name) : string {
//     echo " Hello $name!";
//     return $name;
// };

// $greeter("Hector");


$name = "Hector";
$greeter = function () use($name) : string {
    echo " Hello $name!";
    return $name;
};

function runCallback (callable $callback) {
    echo "before callback";
    echo $callback();
    echo "After callback";
}

runCallback($greeter);