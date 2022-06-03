<?php 

session_start();
include("../includes/database.php");

if(!isset($_GET["id"]) && !isset($_GET["status"])) {
    echo "<script>alert('Invalid Operation'); window.history.go(-1);</script>";
    exit();
}

$status = $_GET["status"];
$feedback_id = $_GET["id"];

$sql = "UPDATE feedback SET feedback_status = '$status' WHERE feedback_id = '$feedback_id'";

if(!mysqli_query($conn, $sql)) {
    $_SESSION["error"] = "Update Feedback Status Failed";
    header("Location: ../feedbackAdmin.php");
    exit();
} else {
    $_SESSION["success"] = "Update Feedback Status Successfully";
    header("Location: ../feedbackAdmin.php");
    exit();
}

?>