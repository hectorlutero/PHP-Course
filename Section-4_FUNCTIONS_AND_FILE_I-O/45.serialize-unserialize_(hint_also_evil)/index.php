<?php

require_once('./Logging.php');

$userData   = unserialize($_GET['data']);
$name       = htmlspecialchars($userData['name']);
$id         = urlencode($userData['id']);

echo "Hello $name, welcome back. Please click <a href='/profile.php?id=$id'>here</a>";