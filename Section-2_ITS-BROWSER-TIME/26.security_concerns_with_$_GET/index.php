<?php

if (isset($_POST['guess'])) {


} else {
    echo "";
}

?>

<html lang="en">
    <body>
        <?php 

        /* use the following JS code to see the evillness of breaking the security thorugh $_GET Super Global;

        <script>alert('Hi, I HAVE TOTAL CONTROL OF YOUR WEBPAGE! MUAHAHAHA ')</script>

        */
        
        echo isset($_GET['username']) ? "Hello dude, " . /*  
        
        try to uncomment this out to see the power of $_GET super global hehe

        htmlspecialchars(*/$_GET['username']/*)*/ : "";  
        
        ?>
        <form method="POST">
            <label for="number">Guess a number between 1 and 10.</label>
            <input type="text" name="username">
            <input type="submit" value="Guess" name="guess">
        </form>
    </body>
</html>

