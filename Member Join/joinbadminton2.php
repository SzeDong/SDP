<?php
include "conn.php";
if (isset($_POST['submit'])) {
   $MemberName = $_POST['MemberName'];
    

    $sql= "INSERT INTO badmintonmemberlist(MemberName) VALUES ('$MemberName');";
    if (mysqli_query($conn,$sql)) {
        echo '<script>alert("You have successfully joined Badmminton Club!");
        window.location.href="memberhomepage.php";
        </script>';
        } else {
                echo '<script>alert("Error update record!");
                window.location.href="memberhomepage.php";
                </script>'; . mysqli_error($conn);
        }
    }
mysqli_close($conn);
?>
