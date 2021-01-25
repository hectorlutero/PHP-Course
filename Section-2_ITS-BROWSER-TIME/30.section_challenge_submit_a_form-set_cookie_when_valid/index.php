<?php

/*
 * Set a random number in a cookie if the cookie doesn't yet exist.
 * Check the user's input to see if the submitted value is the correct
 * value.
 * 
 * BONUS: Use sessions instead of cookies to maintain state.
 * 
 * Remember your data sanitization! Test your work.
 */

// $cookieSetter = setcookie('randomNum', rand(1,10), time()+3600);

session_start();
session_regenerate_id();
$_SESSION['randomNum'] = rand(1,10);
$randomNum  = (int) $_SESSION['randomNum'];
$number     = (int) $_POST['number'];

    if (!empty($number) && array_key_exists('number', $_POST)) {

        // $randomNum  = (int) $_COOKIE['randomNum'];  
            if ($randomNum == $number){
                echo "You have guessed it! The number is " . $randomNum . "!";
                // $cookieSetter;
            } else {
                echo "You missed it, the number was " . $randomNum . ", try again.";
                // $cookieSetter;
            }
    }  else {
        echo "Please, give us a number";
    }

?>
<html>
	<body>
		<form method="POST">
			<input type="text" name="number" />
			<input type="submit" name="Check" />
		</form>
	</body>
</html>
