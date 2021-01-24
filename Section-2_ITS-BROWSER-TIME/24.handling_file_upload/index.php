<?php

if ($_POST['upload']) {

    if (!empty($_FILES['myFile']['error'])){
        echo "something went wrong";
    } else {
        
        $tmpName = $_FILES['myFile']['tmp_name'];
        //here you should perform some security to your file
        $img = hash('sha256', microtime(true));
        move_uploaded_file($tmpName, __DIR__ . '/files/' . $img . '.jpg');
        echo "upload successful!";
    }
}

?>

<html lang="en">
    <body>
        <form method="POST" enctype="multipart/form-data">
            <input type="file" name="myFile">
            <input type="submit" value="Upload" name="upload">
        </form>
    </body>
</html>