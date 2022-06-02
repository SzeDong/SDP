<?php
    include 'conn.php';

    $MemberName = $_POST['membername'];
    $PhoneNum = $_POST['phonenum'];
    $Email = $_POST['email'];
    $EventName = $_POST['eventname'];

    $sql = "INSERT INTO eventmembers (MemberName ,PhoneNumber, Email, EventName) VALUES ('$MemberName', '$PhoneNum', '$Email', '$EventName');";

    if(!mysqli_query($conn, $sql))
    {
        echo 'Member not registered' . mysqli_error($conn);
    }

    else
    {
        echo 'Member registered';
    }
    
    /*header('refresh:5; url=homepagecommittee.php');*/
?>   
