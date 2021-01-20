<?php

$singleQuotedString      = 'My Single quoted string';
echo $singleQuotedString."<br>";
$doubleQuotedString     = "My double quoted string";
echo $doubleQuotedString."<br>";
$scapeCharacter         = 'I\'m learning PHP!'; 
echo $scapeCharacter."<br><br>";

$nowdoc = <<<'EOD'
    There's a bunch of apostrophe's character in this text, and I didn't need to use the "\" scape character. That's pretty cool! 
EOD; // KIND OF SINGLE QUOTES


echo $nowdoc."<br><br>";

$heredoc = <<<EOD
There's a bunch of apostrophe's character in this text, and I didn't need to use the "\" scape character. That's pretty cool! 
EOD; // KIND OF DOUBLE QUOTES

echo $heredoc."<br><br>";