<?php
    include 'conn.php';

    $sql = "DELETE FROM event WHERE EventID='" . $_GET["ID"] . "'";

    if (mysqli_query($conn, $sql)) {
        echo '<script>alert("Event unapproved successfully! Record will be deleted from database.");
        window.location.href="approveevent.php";
        </script>';
    } else {
        echo '<script>alert("Event unapprove failed, please try again!");
        window.location.href="approveevent.php";
        </script>'. mysqli_error($conn);
    }
?>