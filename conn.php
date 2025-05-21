<?php

function connect()
{
    $conn = new mysqli("localhost", "root", "", "otrsphp", 3306);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}

$conn = connect();