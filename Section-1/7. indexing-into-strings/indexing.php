<?php

$myString = "Hello my name is Hector, just a programmer!";
echo $myString."<br><br>";
echo $myString[0]."<br><br>";
echo $myString[-1]."<br><br>";
// echo $myString[-44]."<br><br>"; // THAT'S WONT WORK!
// echo $myString[43]."<br><br>"; // THAT'S WONT WORK! BECAUSE OF THE 0 INDEX.
echo $myString[43-5]."<br><br>";
$myString[43] = "!"."<br><br>";

echo strlen($myString)."<br><br>";
