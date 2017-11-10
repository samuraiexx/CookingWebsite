<?php

$servername = "localhost";
$username = "root";
$password = "";

// remove this
ini_set('display_errors', 'On');

try {
    $db = new PDO("mysql:host=$servername;dbname=cooking; charset=UTF8", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exception $e) {
    echo $e->getMessage();
    die();
}
