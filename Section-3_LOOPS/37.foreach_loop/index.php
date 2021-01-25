<?php

$array = [
    "Hector"    => "Programmer",
    "Dominique" => "Doctor",
    "Alien"     => "Something weird",
    "Matthew"   => "Doctor",
    "Diego"     => "Programmer",

];

// foreach ($array as $key => $val) {
//     // var_dump($key); echo "<br>";
//     // var_dump($val); echo "<br>";

// }
foreach ($array as $name => $job) {
    // var_dump($key); echo "<br>";
    // var_dump($val); echo "<br>";
    if ($name === "Alien") {
        var_dump("$name is  $job"); echo "<br>";
        continue;
    }
    var_dump("$name is a  $job"); echo "<br>";
}