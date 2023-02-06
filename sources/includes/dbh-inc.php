<?php

$host = "localhost";
$dbname = "hopicraftdb";
$username = "root";
$password = "";

$conn = new mysqli(hostname: $host,
                     username: $username,
                     password: $password,
                     database: $dbname);
                     
if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;