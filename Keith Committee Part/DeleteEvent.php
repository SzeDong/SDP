<?php
    include 'conn.php';

    $sql = "DELETE FROM event WHERE EventID='" . $_GET["ID"] . "'";

    if (mysqli_query($conn, $sql)) {
        echo "Event deleted successfully";
    } else {
        echo "Event delete failed: " . mysqli_error($conn);
    }

    header('refresh:5; url=ManageEvent.php');
?>