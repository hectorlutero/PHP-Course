<?php

    if($_POST['send'] && /*!empty($_POST['myName'])*/ array_key_exists('myName', $_POST)) {
        
        $myName = $_POST['myName'];
        echo empty($myName) && $myName !== "0" ? 'No name' : $myName;

    }
?>

<html>
    <body>
        <form method="post">
            <input type="text" name="myName">
            <input type="submit" name="send" value="send">
        </form>
    </body>
</html>