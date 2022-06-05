<?php
    include 'conn.php';

    $ID=$_GET['ID'];
    $sql = "UPDATE clubs SET Status = 'Approved' WHERE ClubID='$ID';";

    if (mysqli_query($conn, $sql)) {
        echo '<script>alert("Club approved successfully!");
        window.location.href="approveclub.php";
        </script>';
    } else {
        echo '<script>alert("Club approve failed, please try again!");
        window.location.href="approveclub.php";
        </script>'. mysqli_error($conn);
    }

?>