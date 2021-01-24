<?php

    var_dump($_REQUEST, $_GET, $_POST);

    if (!empty($_GET['newName'])){
        echo "New name is: " . $_GET['newName'];
    }

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