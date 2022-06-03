<?php
    include 'conn.php';

    $sql = "DELETE FROM clubs WHERE ClubID='" . $_GET["ID"] . "'";

    if (mysqli_query($conn, $sql)) {
        echo "Club unapproved and Club record will be deleted";
    } else {
        echo "Club unapprove failed: " . mysqli_error($conn);
    }

    header('refresh:5; url=approveclub.php');
?>
