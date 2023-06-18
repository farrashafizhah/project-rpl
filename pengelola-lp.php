<?php 
	session_start();

	include 'connection.php';

	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = mysqli_query($connect, "SELECT * FROM pengelola WHERE username='$username' AND password='$password'");
	$cek = mysqli_num_rows($query);

	if ($cek > 0) {
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "login";
		header("location: pengelola-home.php");
	}
	else {
		header("location: pengelola-login.php?message=gagal#login");
	}
?>