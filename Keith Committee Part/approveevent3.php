<?php
    include 'conn.php';

    $sql = "DELETE FROM event WHERE EventID='" . $_GET["ID"] . "'";

    if (mysqli_query($conn, $sql)) {
        echo "Event unapproved and Event record will be deleted";
    } else {
        echo "Event unapprove failed: " . mysqli_error($conn);
    }

    header('refresh:5; url=approveevent.php');
?>
