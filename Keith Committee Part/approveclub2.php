<?php
    include 'conn.php';

    $ID=$_GET['ID'];
    $sql = "UPDATE clubs SET Status = 'Approved' WHERE ClubID='$ID';";

    if (mysqli_query($conn, $sql)) {
        echo "Club approved";
    } else {
        echo "Club approve failed: " . mysqli_error($conn);
    }
            
    header('refresh:5; url=approveclub.php');

?>