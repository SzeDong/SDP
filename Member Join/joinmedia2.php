<?php
include "conn.php";
if (isset($_POST['submit'])) {
   $MemberName = $_POST['MemberName'];
    

    $sql= "INSERT INTO mediamemberlist(MemberName) VALUES ('$MemberName');";
    if (mysqli_query($conn,$sql)) {
        echo '<script>alert("You have successfully joined Media Club!");
        window.location.href="memberhomepage.php";
        </script>';
        } else {
                echo "Error update record: " . mysqli_error($conn);
        }
    }
mysqli_close($conn);
?>