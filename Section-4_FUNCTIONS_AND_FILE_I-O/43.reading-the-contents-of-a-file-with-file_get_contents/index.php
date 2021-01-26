<?php

$fileContents = file_get_contents('./text.log');
echo "Using file_get_contents():<br>";
var_dump($fileContents); echo "<br><br>";


$lines = file('./text.log');
echo "Using file() and for loop:<br>";

for ($i=0; $i < count($lines); $i++) { 
    var_dump($lines[$i]); echo "<br>";
}

echo "<br>Using trim in for loop:<br>";
for ($i=0; $i < count($lines); $i++) { 
    var_dump(trim($lines[$i])); echo "<br>";
}

