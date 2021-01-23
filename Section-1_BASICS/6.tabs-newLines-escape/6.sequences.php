<?php

$myName = "Hector";

$singleQuotedString      = 'Hello, $myName!';
echo $singleQuotedString."<br><br>";
$doubleQuotedString     = "\$myName is $myName";
echo $doubleQuotedString."<br><br>";
echo "\n"; // IT BREAKS THE LINE
echo "\t"; // IT TABS THE TEXTS
echo "\\"; // IT SCAPES QUOTES BUT WORKS ON SINGLE QUOTE AS WELL

echo "After new line";