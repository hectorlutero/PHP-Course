<?php


session_start();
session_regenerate_id(); // In this case it will regenerate the token session everytime the page is refresh

if (empty($_SESSION['randomNumber'])){
 
    var_dump("Setting session.");
    $_SESSION['randomNumber'] = rand(1, 10);
}
if (isset($_POST['guess'])) {

    $randomNumber = (int) $_SESSION['randomNumber'];
    $number = $_POST['number'];

    if ($randomNumber == $number) {
        echo "You guessed it";
        $_SESSION['randomNumber'];
    } else {
        echo "Try again, the number was " . $randomNumber;
        $_SESSION['randomNumber'];
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

