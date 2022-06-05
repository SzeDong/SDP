<?php
    include 'conn.php';

    $sql = "DELETE FROM event WHERE EventID='" . $_GET["ID"] . "'";

    if (mysqli_query($conn, $sql)) {
        echo '<script>alert("Event deleted successfully!");
        window.location.href="ManageEvent.php";
        </script>';
    } else {
        echo '<script>alert("Event delete failed, please try again!");
        window.location.href="ManageEvent.php";
        </script>'. mysqli_error($conn);
    }
?>