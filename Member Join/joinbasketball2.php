<?php
include "conn.php";
if (isset($_POST['submit'])) {
   $MemberName = $_POST['MemberName'];
    

    $sql= "INSERT INTO basketballmemberlist(MemberName) VALUES ('$MemberName');";
    if (mysqli_query($conn,$sql)) {
        echo '<script>alert("You have successfully joined Basketball Club!");
        window.location.href="memberhomepage.php";
        </script>';
        } else {
                echo "Error update record: " . mysqli_error($conn);
        }
    }
mysqli_close($conn);
?>