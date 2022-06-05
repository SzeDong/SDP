<?php
    include 'conn.php';

    $ID=$_GET['ID'];
    $sql = "UPDATE event SET Status = 'Approved' WHERE EventID='$ID';";

    if (mysqli_query($conn, $sql)) {
        echo '<script>alert("Event approved successfully!");
        window.location.href="approveevent.php";
        </script>';
    } else {
        echo '<script>alert("Event approve failed, please try again!");
        window.location.href="approveevent.php";
        </script>'. mysqli_error($conn)"";
    }
?>