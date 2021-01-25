<?php

/*
    VERY IMPORTANT ADVICE:
    
        * DON'T STORE SQL STATEMENTS IN YOUR COOKIES, IT SEEMS COOL BUT IT'S A MAJOR FLAW OF SECURITY IN YOUR CODE DESIGN. THEY LITERALLY CAN ACCESS EVERYTHING IN YOUR DATABASE, USERNAMES, PASSWORDS, TOKENS, EVERYTHING, THEY SIMPLY OWN YOU! BE AWARE!

*/


$cookieSetter = setcookie('randomNumber', rand(1, 10), time()+3600);
if (empty($_COOKIE['randomNumber'])) {
    // $_COOKIE['randomNumber'] = "27" // THAT WORKS BUT IT ISN'T THE BEST WAY TO DO IT
    var_dump("Setting the cookie");    
    $cookieSetter;
}

if (isset($_POST['guess'])) {

    $randomNumber = (int) $_COOKIE['randomNumber'];
    $number = $_POST['number'];

    if ($randomNumber == $number) {
        echo "You guessed it";
        $cookieSetter;
    } else {
        echo "Try again, the number was " . $randomNumber;
        $cookieSetter;
    }
} else {
    echo "nothing to see here";
}

?>

<html lang="en">
    <body>

        <form method="POST">
            <label for="number">Guess a number between 1 and 10.</label>
            <input type="number" name="number">
            <input type="submit" value="Guess" name="guess">
        </form>
    </body>
</html>

