<?php
$username = "root";
$password = "";
$dbname = "registrationclubs";

$conn = new PDO('mysql:host=localhost;dbname=' . $dbname . ';charset-utf8mb4', $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>