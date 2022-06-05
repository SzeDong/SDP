<?php
    require "conn.php";
$sql = "DELETE FROM users WHERE id ='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
    echo '<script>alert("You have successfully delete the record!");
    window.location.href="manageAcc.php";
    </script>';
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
header('refresh:5; url=manageAcc.php');
mysqli_close($conn);
?>