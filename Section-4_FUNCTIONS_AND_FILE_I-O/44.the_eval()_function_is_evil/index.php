<?php

// One of the security flaws in php

// $user = "hector";
$user = $_GET['user'];
$phpCode = "echo $user;";
eval($phpCode);