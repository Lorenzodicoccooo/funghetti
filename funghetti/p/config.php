<?php

$server = "localhost";
$username = "funghetti";
$password = "";
$database = "my_funghetti";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) { // If Check Connection
    die("<script>alert('Connection Failed.')</script>");
}

?>
