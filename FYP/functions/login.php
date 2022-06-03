<?php
include ('../includes/database.php');
session_start();

if(isset($_POST['login'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";	
	$query = mysqli_query($conn, $sql);
	
	if($fetch = mysqli_fetch_array($query)){
		$_SESSION['id']=$fetch['id'];
		$_SESSION['username']=$fetch['username'];

		echo "<script>alert('Login Successfully!'); window.location='../userProfile.php';</script>";
		exit();
	}else{
		echo "<script>alert('Invalid username or password');window.location='../indexprofile.php';</script>";
		exit();
	}
}

?>