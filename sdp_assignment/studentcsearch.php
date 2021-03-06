<?php
define("db_host", "localhost");
define("db_name", "sdp");
define("db_user", "root");
define("db_password", "");

//connect to database
$pdo = new PDO("mysql:host=".db_host.";dbname=".db_name,db_user,db_password, [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]
);

//search for either ID or Name
$stmt = $pdo -> prepare("SELECT * FROM studentcmemberlist WHERE MemberID LIKE ? OR MemberName LIKE ?");
$stmt -> execute([
    "%".$_POST['studentcouncilmember']."%", "%".$_POST['studentcouncilmember']."%"
]);
$results = $stmt ->fetchAll();