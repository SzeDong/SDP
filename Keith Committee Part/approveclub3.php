<?php
    include 'conn.php';

    $sql = "DELETE FROM clubs WHERE ClubID='" . $_GET["ID"] . "'";

    if (mysqli_query($conn, $sql)) {
        echo '<script>alert("Club unapproved successfully! Record will be deleted from database.");
        window.location.href="approveclub.php";
        </script>';
    } else {
        echo '<script>alert("Club unapprove failed, please try again!");
        window.location.href="approveclub.php";
        </script>'. mysqli_error($conn);
    }
?>