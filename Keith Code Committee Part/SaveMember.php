<?php
    include 'conn.php';

    $MemberName = $_POST['membername'];
    $EventName = $_POST['eventname'];

    $sql = "INSERT INTO eventmembers (MemberName, EventName) VALUES ('$MemberName', '$EventName');";

    if(!mysqli_query($conn, $sql))
    {
        echo 'Member not registered' . mysqli_error($conn);
    }

    else
    {
        echo 'Member registered';
    }
    
    header('refresh:5; url=ViewRegisteredMember.php');
?>   
