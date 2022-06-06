<?php
    include 'conn.php';

    $MemberName = $_POST['membername'];
    $PhoneNum = $_POST['phonenum'];
    $Email = $_POST['email'];
    $EventName = $_POST['eventname'];

    $sql = "INSERT INTO eventmembers (MemberName ,PhoneNumber, Email, EventName) VALUES ('$MemberName', '$PhoneNum', '$Email', '$EventName');";

    if(mysqli_query($conn, $sql)) {
        echo '<script>alert("Successfully registered for event!");
        window.location.href="hpcommittee.php";
        </script>';
    } else {
        echo '<script>alert("Registration for event failed, please try again!");
        window.location.href="hpcommittee.php";
        </script>'. mysqli_error($conn);
    }
?>   
