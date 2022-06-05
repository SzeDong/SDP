<?php
include ("conn.php");
if (isset($_POST['submit'])) {
    $clubname = $_POST['cname'];
    $announcementdescription = $_POST['adescription'];

    $sql= "INSERT INTO newannouncement(clubname, announcementdescription) VALUES ('$clubname', '$announcementdescription')";
    if (!mysqli_query($con,$sql)) {
        die('Error: ' . mysqli_error($con));
        }
        else {
        echo '<script>alert("1 new announcement is added!");
        window.location.href="viewannouncement.php";
        </script>';
        }
    }

mysqli_close($con);
?>