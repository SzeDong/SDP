<?php

$sname = "localhost";
$uname = "root";
$password = "";

$db_name = "sdp_db";

$conn = mysqli_connect($sname, $uname , $password, $db_name);

if (!$conn) {
    die("<script>alert('The connection to the database has failed!')</script>");
    exit();
}

?>