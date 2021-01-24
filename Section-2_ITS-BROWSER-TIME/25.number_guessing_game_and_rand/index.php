<?php

if (isset($_POST['guess'])) {

    $randomNumber = rand(1, 10);
    $number = $_POST['number'];

    if ($randomNumber == $number) {
        echo "You guessed it";
    } else {
        echo "Try again, the number was " . $randomNumber;
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

